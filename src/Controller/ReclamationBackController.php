<?php

namespace App\Controller;
use App\Entity\Reclamation;
use App\Form\ReclamationType; // Make sure to import ReclamationType
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class ReclamationBackController extends AbstractController
{
    #[Route('/reclamation/back', name: 'app_reclamation_back')]
    public function index(): Response
    {
        return $this->render('reclamation_back/index.html.twig', [
            'controller_name' => 'ReclamationBackController',
        ]);
    }

    #[Route('/reclamation/back/add', name: 'addreclamationback')]
    public function addReclamationBack(ManagerRegistry $doctrine, Request $req): Response
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

            return $this->redirectToRoute('listReclamationBack');
        }

        return $this->render('reclamation_back/addReclamationBack.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reclamation/back/list', name: 'listReclamationBack')]
    public function listReclamationBack(ManagerRegistry $doctrine): Response
    {     
        // Récupérer les reclamations depuis la base de données
        $reclamations = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        
        // Passer les reclamations à la vue Twig
        return $this->render('reclamation_back/listReclamationBack.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }
    #[Route('/reclamation/back/delete{id}', name: 'deleteReclamationBack')]
    public function deleteReclamationBack(Request $request, int $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclamation::class)->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Reclamation not found.');
            return $this->redirectToRoute('listReclamationBack');
        }
        $em->remove($reclamation);
        $em->flush();

        return $this->redirectToRoute('listReclamationBack');
    }
}
