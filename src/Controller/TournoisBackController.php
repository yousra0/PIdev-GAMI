<?php

namespace App\Controller;

use App\Entity\Tournois;
use App\Form\TournoisType;
use App\Repository\TournoisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class TournoisBackController extends AbstractController
{
    #[Route('/tournois/back', name: 'app_tournois_back', methods: ['GET'])]
    public function index(TournoisRepository $tournoisRepository): Response
    {
        return $this->render('tournois_back/index.html.twig', [
            'tournois' => $tournoisRepository->findAll(),
        ]);
    }
    
    #[Route('/new', name: 'app_tournoisBack_new', methods: ['GET', 'POST'])]
public function newBack(Request $request, EntityManagerInterface $entityManager): Response
{
    $tournoi = new Tournois();
    $form = $this->createForm(TournoisType::class, $tournoi);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Retrieve the value of the manually added input field with ID 'search_input'
        $searchInputValue = $request->request->get('search_input');
        
        // Do something with $searchInputValue
        
        $logo = $form->get('logo')->getData();
        if ($logo) {
            $logoName = uniqid().'.'.$logo->guessExtension();
            $logo->move(
                $this->getParameter('upload_directory'),
                $logoName
            );
            $tournoi->setLogo($logoName); // Make sure your entity has a setFile method to store the file path
        }
        
        // Set other form data
        $tournoi->setLieu($searchInputValue); // Assuming 'location' is the field to store the location
        
        $entityManager->persist($tournoi);
        $entityManager->flush();

        return $this->redirectToRoute('app_tournois_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('tournois_back/_form.html.twig', [
        'tournoi' => $tournoi,
        'form' => $form,
    ]);
}

    #[Route('/back/{id}', name: 'app_tournoisBack_show', methods: ['GET'])]
    public function showBack(Tournois $tournoi): Response
    {
        return $this->render('tournois_back/show.html.twig', [
            'tournoi' => $tournoi,
        ]);
    }

    #[Route('/back/{id}/edit', name: 'app_tournoisBack_edit', methods: ['GET', 'POST'])]
public function editBack(Request $request, Tournois $tournoi, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(TournoisType::class, $tournoi);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Retrieve the value of the manually added input field with ID 'search_input'
        $searchInputValue = $request->request->get('search_input');
        
        // Do something with $searchInputValue
        
        $logo = $form->get('logo')->getData();
        if ($logo) {
            $logoName = uniqid().'.'.$logo->guessExtension();
            $logo->move(
                $this->getParameter('upload_directory'),
                $logoName
            );
            $tournoi->setLogo($logoName); // Make sure your entity has a setFile method to store the file path
        }
        
        // Set other form data
        $tournoi->setLieu($searchInputValue); // Assuming 'location' is the field to store the location
        
        $entityManager->flush();

        return $this->redirectToRoute('app_tournois_back', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('tournois_back/edit.html.twig', [
        'tournoi' => $tournoi,
        'form' => $form,
    ]);
}

    #[Route('/{id}', name: 'app_tournoisBack_delete', methods: ['POST'])]
    public function deleteBack(Request $request, Tournois $tournoi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tournoi->getId(), $request->request->get('_token'))) {
            $entityManager->remove($tournoi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_tournois_back', [], Response::HTTP_SEE_OTHER);
    }
}
