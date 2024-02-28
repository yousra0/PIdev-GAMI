<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseType;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reclamation;

class ReponseController extends AbstractController
{
    #[Route('/reponse', name: 'app_reponse')]
    public function index(): Response
    {
        return $this->render('reponse/index.html.twig', [
            'controller_name' => 'ReponseController',
        ]);
    }
    #[Route('/reponse/add', name: 'addReponse')]
    public function addReponse(ManagerRegistry $doctrine, Request $req): Response
    {
        $em = $doctrine->getManager();
        $reponse = new Reponse;
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $reponse->setDateRep(new DateTime());
            $em->persist($reponse);
            $em->flush();

            return $this->redirectToRoute('listReponse');
        }

        return $this->render('reponse/addReponse.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/reponse/listReponse', name: 'listReponse')]
    public function listReponse(ManagerRegistry $doctrine): Response
    {     
        // Récupérer les reclamations depuis la base de données
        $reponse = $this->getDoctrine()->getRepository(Reponse::class)->findAll();
        
        // Passer les reclamations à la vue Twig
        return $this->render('reponse/listReponse.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    #[Route('/reponse/deleteReponse{id}', name: 'deleteReponse')]
    public function deleteReponse(Request $request, int $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $reponse = $em->getRepository(Reponse::class)->find($id);

        if (!$reponse) {
            throw $this->createNotFoundException('Reponse not found');
        }

        $em->remove($reponse);
        $em->flush();

        return $this->redirectToRoute('listReponse');
    }


    #[Route('/reponse/editReponse/{id}', name: 'editReponse')]
    public function editReponse(Request $request, int $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $reponse = $em->getRepository(Reponse::class)->find($id);

        if (!$reponse) {
            throw $this->createNotFoundException('Reponse not found');
        }

        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $em->flush();
            return $this->redirectToRoute('listReponse');
        }

        return $this->render('reponse/editReponse.html.twig', [
            'form' => $form->createView(),
            'reponse' => $reponse,
        ]);
    }
}
