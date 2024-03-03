<?php

namespace App\Controller;

use App\Entity\Equipes;
use App\Entity\Tournois;
use App\Form\EquipesType;
use App\Repository\EquipesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/equipes')]
class EquipesController extends AbstractController
{
    #[Route('/', name: 'app_equipes_index', methods: ['GET'])]
    public function index(EquipesRepository $equipesRepository): Response
    {
        return $this->render('equipes/index.html.twig', [
            'equipes' => $equipesRepository->findAll(),
        ]);
    }
    #[Route('/new/{tournoi_id}', name: 'app_equipes_new', methods: ['GET', 'POST'])]
public function newEquipe(Request $request, EntityManagerInterface $entityManager, ?int $tournoi_id = null): Response
{
    $equipe = new Equipes();
    
    // Pré-remplir le champ tournois avec l'identifiant du tournoi si fourni
    if ($tournoi_id !== null) {
        $tournoi = $entityManager->getRepository(Tournois::class)->find($tournoi_id);
        if ($tournoi) {
            $equipe->setTournois($tournoi);
        }
    }
    
    $form = $this->createForm(EquipesType::class, $equipe);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($equipe);
        $entityManager->flush();

        return $this->redirectToRoute('app_equipes_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('equipes/new.html.twig', [
        'equipe' => $equipe,
        'form' => $form,
    ]);
}

    #[Route('/new', name: 'app_equipes_new1', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $equipe = new Equipes();
    $form = $this->createForm(EquipesType::class, $equipe);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Récupérez l'ID du tournoi sélectionné à partir du formulaire
        $tournoiId = $request->request->get('equipes')['tournois'];

        // Récupérez l'objet Tournois correspondant
        $tournois = $entityManager->getRepository(Tournois::class)->find($tournoiId);

        // Définissez le tournoi pour l'équipe
        $equipe->setTournois($tournois);

        // Persistez l'équipe
        $entityManager->persist($equipe);
        $entityManager->flush();

        return $this->redirectToRoute('app_equipes_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('equipes/new.html.twig', [
        'equipe' => $equipe,
        'form' => $form,
    ]);
}



    #[Route('/{id}', name: 'app_equipes_show', methods: ['GET'])]
    public function show(Equipes $equipe): Response
    {
        return $this->render('equipes/show.html.twig', [
            'equipe' => $equipe,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_equipes_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Equipes $equipe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipesType::class, $equipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_equipes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('equipes/edit.html.twig', [
            'equipe' => $equipe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_equipes_delete', methods: ['POST'])]
    public function delete(Request $request, Equipes $equipe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipe->getId(), $request->request->get('_token'))) {
            $entityManager->remove($equipe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_equipes_index', [], Response::HTTP_SEE_OTHER);
    }
}
