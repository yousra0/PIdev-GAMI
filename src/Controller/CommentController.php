<?php

namespace App\Controller;

use DateTime;
use App\Entity\Comment;
use App\Entity\Post;
use App\Form\CommentType;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


class CommentController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    private function containsInappropriateWords(string $content): bool
    {
        $inappropriateWords = ['test', 'salut', 'bonjour']; // Add more inappropriate words if needed

        foreach ($inappropriateWords as $word) {
            if (stripos($content, $word) !== false) {
                return true;
            }
        }

        return false;
    }

    #[Route('/comment', name: 'app_comment')]
    public function index(): Response
    {
        return $this->render('comment/index.html.twig', [
            'controller_name' => 'CommentController',
        ]);
    }

    #[Route('/post/addcomment', name: 'add_comment')]
    public function addComment(Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        
        // Get the post ID from the request
        $postId = $request->request->get('postId');
        $post = $em->getRepository(Post::class)->find($postId);

        // Create a new Comment entity
        $comment = new Comment(); 
        $comment->setContenuComment($request->request->get('contenuComment'));
        $comment->setDateComment(new \DateTime());
        $comment->setPost($post);

        //fonction du filtrage des commentaires
        if ($this->containsInappropriateWords($comment->getContenuComment())) {
            $comment->setContenuComment(str_repeat('*', mb_strlen($comment->getContenuComment())));
        }
        
        // Check if the comment content is valid
        if (empty($comment->getContenuComment()) || strlen($comment->getContenuComment()) < 5) {
            // Add a flash message with the error
            $this->addFlash('error', 'Le commentaire doit contenir au moins 5 caractères.');
            // Redirect back to the previous page
            return $this->redirect($request->headers->get('referer'));
        }

        // Persist and flush the new Comment entity
        $em->persist($comment);
        $em->flush();

        return $this->redirectToRoute('listPost', ['id' => $postId]);
    }

    #[Route('/comment/listComment', name: 'listComment')]
    public function listComment(ManagerRegistry $doctrine): Response
    {     
        $manager=$doctrine->getManager();

        $commentRepository=$doctrine->getRepository(Comment::class);
        $comments=$commentRepository->findAll();

        return $this->render('post/listPost.html.twig', [
            'comments' => $comments, 
        ]);
    }

    #[Route('/comment/deleteComment/{id}', name: 'deleteComment')]
    public function deleteComment(Request $request, int $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $comment = $em->getRepository(Comment::class)->find($id);

        if (!$comment) {
            throw $this->createNotFoundException('Comment not found');
        }

        $em->remove($comment);
        $em->flush();

        return $this->redirectToRoute('listPost');
    }

    //éditer les informations d'un commentaire existant dans la bdd
    #[Route('/comment/editComment/{id}', name: 'editComment')]
    public function editComment(Request $request, int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $comment = $entityManager->getRepository(Comment::class)->find($id);

        if (!$comment) {
            throw $this->createNotFoundException('Comment not found');
        }

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('listPost');
        }

        return $this->render('comment/editComment.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function getCommentsByPost($postId)
    {
        $comments = $this->getDoctrine()->getRepository(Comment::class)->findBy(['post' => $postId]);

        $data = [];
        foreach ($comments as $comment) {
            $data[] = [
                'id' => $comment->getId(),
                'content' => $comment->getContent(),
                // Ajoutez d'autres champs de commentaire si nécessaire
            ];
        }
        return new JsonResponse($data);
    }


}
