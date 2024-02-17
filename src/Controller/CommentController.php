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
        /*$em = $doctrine->getManager();
        $postId = $request->request->get('postId');
        $post = $em->getRepository(Post::class)->find($postId);

        $comment = new Comment();
        $comment->setContenuComment($request->request->get('contenuComment'));
        $comment->setDateComment(new \DateTime());
        $comment->setPost($post);

        $em->persist($comment);
        $em->flush();

        return $this->redirectToRoute('listPost');*/
        $em = $doctrine->getManager();
        
        // Get the post ID from the request
        $postId = $request->request->get('postId');
        $post = $em->getRepository(Post::class)->find($postId);

        // Create a new Comment entity
        $comment = new Comment();
        $comment->setContenuComment($request->request->get('contenuComment'));
        $comment->setDateComment(new \DateTime());
        $comment->setPost($post);

        // Persist and flush the new Comment entity
        $em->persist($comment);
        $em->flush();

        return $this->redirectToRoute('listPost');
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
        /*$form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('listComment');
        }

        return $this->render('comment/editComment.html.twig', [
            'form' => $form->createView(),
        ]);*/

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
