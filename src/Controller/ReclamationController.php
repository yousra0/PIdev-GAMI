<?php

namespace App\Controller;
use App\Entity\Reponse;

use App\Entity\Reclamation;
use App\Form\ReclamationType; // Make sure to import ReclamationType
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormTypeInterface; // Add missing semicolon and import statement
use Symfony\Component\HttpFoundation\JsonResponse;

class ReclamationController extends AbstractController
{
    #[Route('/reclamation', name: 'app_reclamation')]
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }

    #[Route('/reclamation/add', name: 'addReclamation')]
    public function addReclamation(ManagerRegistry $doctrine, Request $req): Response
    {
        $em = $doctrine->getManager();
        $reclamation = new Reclamation;
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $reclamation->setDateRec(new DateTime());
            $em->persist($reclamation);
            $em->flush();

            return $this->redirectToRoute('listReclamation');
        }

        return $this->render('reclamation/addReclamation.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/reclamation/listReclamation', name: 'listReclamation')]
    public function listReclamation(ManagerRegistry $doctrine): Response
    {     
        // Récupérer les reclamations depuis la base de données
        $reclamations = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        
        // Passer les reclamations à la vue Twig
        return $this->render('reclamation/listReclamation.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/reclamation/deleteReclamation{id}', name: 'deleteReclamation')]
    public function deleteReclamation(Request $request, int $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclamation::class)->find($id);

        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }

        $em->remove($reclamation);
        $em->flush();

        return $this->redirectToRoute('listReclamation');
    }


    #[Route('/reclamation/editReclamation/{id}', name: 'editReclamation')]
    public function editReclamation(Request $request, int $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclamation::class)->find($id);

        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }

        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $em->flush();
            return $this->redirectToRoute('listReclamation');
        }

        return $this->render('reclamation/editReclamation.html.twig', [
            'form' => $form->createView(),
            'reclamation' => $reclamation,
        ]);
    }


}
