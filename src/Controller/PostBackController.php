<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Comment;
use DateTime;
use App\Entity\Post;
use App\Form\CommentType;
use App\Form\PostType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class PostBackController extends AbstractController
{
    #[Route('/post/back', name: 'app_post_back')]
    public function index(): Response
    {
        return $this->render('post_back/index.html.twig', [
            'controller_name' => 'PostBackController',
        ]);
    }

    #[Route('/postback/back/add', name: 'addpostback')]
    public function addPost(ManagerRegistry $doctrine, Request $req): Response
    {
        $em=$doctrine->getManager();
        $post= new Post;
        $form=$this->createForm(PostType::class, $post);
        $form->handleRequest($req);

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

            $post->setDatePub(new DateTime());
            $em = $this->getDoctrine()->getManager();


            // Ajouter les commentaires
            $comments = $form->get('comments')->getData();
            foreach ($comments as $comment) 
            {
                $comment->setDateComment(new DateTime());
                $comment->setPost($post);
                $em->persist($comment);
            }


                $em->persist($post);
                $em->flush();
                return $this->redirectToRoute('listPostBack');
            }

            return $this->render('post_back/addPostBack.html.twig', [
                'post' => $post,
                'form' => $form->createView(),
            ]);
    
    }

    #[Route('/postback/back/listPost', name: 'listPostBack')]
    public function listPost(ManagerRegistry $doctrine): Response
    {     
        // Récupérer les posts depuis la base de données
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        
        // Charger les commentaires pour chaque post
        foreach ($posts as $post) 
        {
            $post->getComments();
        }
        
        // Créer un nouveau formulaire de commentaire
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        // Passer les posts et le formulaire à la vue Twig
        return $this->render('post_back/listPostBack.html.twig', [
            'posts' => $posts,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/postback/back/deletePost/{id}', name: 'deletePostBack')]
    public function deletePost(Request $request, Post $post): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('listPostBack');
    }

    //éditer les informations d'un livre existant dans la bdd
    #[Route('/postback/back/editPost/{id}', name: 'editPostBack')]
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

            return $this->redirectToRoute('listPostBack');
        }

        return $this->render('post_back/editPostBack.html.twig', [
            'form' => $form->createView(),
            'post' => $post, // Passer l'objet Post au template
        ]);
    }

   
}
