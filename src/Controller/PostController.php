<?php

namespace App\Controller;

use App\Entity\Comment;
use DateTime;
use App\Entity\Post;
use App\Form\CommentType;
use App\Form\PostType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface;
use App\Service\CaptchaGenerator;
use Symfony\Contracts\Translation\TranslatorInterface;

class PostController extends AbstractController
{
    #[Route('/post', name: 'app_post')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    private function containsInappropriateWords(string $content): bool
    {
        $inappropriateWords = ['test','salut', 'bonjour', 'shit']; // Add more inappropriate words if needed

        foreach ($inappropriateWords as $word) 
        {
            if (stripos($content, $word) !== false) 
            {
                return true;
            }
        }
        return false;
    }

    private TranslatorInterface $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    #[Route('/post/add', name: 'addpost')]
    public function addPost(ManagerRegistry $doctrine, Request $req): Response
    {
        $em=$doctrine->getManager();
        $post= new Post;
        $form=$this->createForm(PostType::class, $post);
        $form->handleRequest($req);
        

        $form = $this->createForm(PostType::class);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            //$this->addFlash('success', $this->translator->trans('Post.Form.SuccessMsg'));
            $user = $this->getUser();
        
        // Set the user to the post
        $post->setUser($user);

            $file = $form->get('file')->getData();
            if ($file) 
            {
                $fileName = uniqid().'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('upload_directory'),
                    $fileName
                );
                $post->setFile($fileName); // Assurez-vous que votre entité a une méthode setFile pour stocker le chemin du fichier
            }

            $post->setDatePub(new DateTime());
            $em = $this->getDoctrine()->getManager();


            // Ajouter les commentaires
            $comments = $form->get('comments')->getData();
            foreach ($comments as $comment) 
            {
                if ($this->containsInappropriateWords($comment->getContenuComment())) 
                {
                    $comment->setContenuComment(str_repeat('*', mb_strlen($comment->getContenuComment())));
                }

                $comment->setDateComment(new DateTime());
                $comment->setPost($post);
                $em->persist($comment);

                // Check if the comment content is valid
                if (empty($comment->getContenuComment()) || strlen($comment->getContenuComment()) < 5) {
                    // Add a flash message with the error
                    $this->addFlash('error', 'Le commentaire doit contenir au moins 5 caractères.');
                    // Redirect back to the previous page
                    return $this->redirect($req->headers->get('referer'));
                }
            }


                $em->persist($post);
                $em->flush();
                //return $this->redirectToRoute('listPost');
                return $this->redirectToRoute('listPost', ['id' => $post->getId()]);
        }

            return $this->render('post/addPost.html.twig', [
                'post' => $post,
                'form' => $form->createView(),
            ]);
    
    }

    #[Route('/post/listPost', name: 'listPost')]
    public function listPost(PaginatorInterface $paginator, Request $request,ManagerRegistry $doctrine): Response
    {     
        // Récupérer les posts depuis la base de données
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        
        //pagination
        $query = $this->getDoctrine()->getRepository(Post::class)->createQueryBuilder('p');
        $pagination = $paginator->paginate
        (
            $query->getQuery(),
            $request->query->getInt('page', 1), // Numéro de page actuel, 1 par défaut
            2 // Nombre d'éléments par page
        );

        // Charger les commentaires pour chaque post
        foreach ($pagination as $post) 
        {
            $post->getComments();
        }
        
        // Créer un nouveau formulaire de commentaire
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

        // Passer les posts et le formulaire à la vue Twig
            return $this->render('post/listPost.html.twig', [
                'pagination' => $pagination,
                'form' => $form->createView(),
            ]);
        

    }

    #[Route('/post/deletePost/{id}', name: 'deletePost')]
    public function deletePost(Request $request, Post $post): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('listPost');
    }

    //éditer les informations d'un livre existant dans la bdd
    #[Route('/post/editPost/{id}', name: 'editPost')]
    public function editPost(Request $request, Post $post): Response
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $file = $form->get('file')->getData();
            if ($file) 
            {
                $fileName = uniqid().'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('upload_directory'),
                    $fileName
                );
                $post->setFile($fileName); // Assurez-vous que votre entité a une méthode setFile pour stocker le chemin du fichier
            }

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('listPost');
        }

        return $this->render('post/editPost.html.twig', [
            'form' => $form->createView(),
            'post' => $post, // Passer l'objet Post au template
        ]);
    }

    #[Route('/post/like/{id}', name: 'like_post')]
    public function likePost(Post $post): JsonResponse
    {
        if ($this->isLiked($post)) {
            $post->setLikes($post->getLikes() - 1);
        } else {
            $post->setLikes($post->getLikes() + 1);
        }

        $this->getDoctrine()->getManager()->flush();

        return new JsonResponse(['likes' => $post->getLikes()]);
    }

    #[Route('/post/dislike/{id}', name: 'dislike_post')]
    public function dislikePost(Post $post): JsonResponse
    {
        if ($this->isDisliked($post)) {
            $post->setDislikes($post->getDislikes() - 1);
        } else {
            $post->setDislikes($post->getDislikes() + 1);
        }

        $this->getDoctrine()->getManager()->flush();

        return new JsonResponse(['dislikes' => $post->getDislikes()]);
    }

    private function isLiked(Post $post): bool
    {
        $user = $this->getUser(); // Supposons que vous avez un système d'authentification Symfony
        if (!$user) {
            return false; // L'utilisateur n'est pas connecté, donc il ne peut pas avoir liké
        }

        return $post->getLikes()->contains($user);
    }

    private function isDisliked(Post $post): bool
    {
        $user = $this->getUser(); // Supposons que vous avez un système d'authentification Symfony
        if (!$user) {
            return false; // L'utilisateur n'est pas connecté, donc il ne peut pas avoir disliké
        }

        return $post->getDislikes()->contains($user);
    }

    #[Route('/post/details/{id}', name: 'app_details_2')]
    public function details(Post $post, Request $request): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        return $this->render('post/details.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }

}
