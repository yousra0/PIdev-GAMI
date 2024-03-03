<?php

namespace App\Controller;

use App\Entity\Game;
use App\Form\GameType;
use App\Repository\CategorieRepository;
use App\Repository\GameRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/game')]
class GameController extends AbstractController
{
    #[Route('/', name: 'app_game_index', methods: ['GET'])]
    public function index(
        GameRepository $gameRepository,
        PaginatorInterface $paginator,
        Request $request,
        CategorieRepository $catRepo,

        ): Response
    {
        // Récupérer le numéro de page à partir de la requête pour filtrage
        $page = $request->query->getInt('page', 1);
        //on va chercher toutes les catégories
        $categories = $catRepo->findAll();
        
        ///pour pagination 
        $data = $gameRepository->findAll();
        $games = $paginator->paginate(
            $data,
            $request->query->getInt('page', 1),
            6
        );  ////end pagination

        return $this->render('game/index.html.twig', [
            'games' => $games,
            'categories' =>$categories,
            'page' => $page,
        ]);
    }

    #[Route('/new', name: 'app_game_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $game = new Game();
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();
            if ($image) 
            {
                $imageName = uniqid().'.'.$image->guessExtension();
                $image->move(
                    $this->getParameter('upload_directory'),
                    $imageName
                );
                $game->setImage($imageName); // Assuming setImage is a method in your Game entity to set the image property
            }
    
            $entityManager->persist($game);
            $entityManager->flush();
            $this->addFlash('success','Game successfully created!');
    
            return $this->redirectToRoute('app_game_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('game/_form.html.twig', [
            'game' => $game,
            'form' => $form,
        ]);
    }
    

    #[Route('/{id}', name: 'app_game_show', methods: ['GET'])]
    public function show(Game $game): Response
    {
        return $this->render('game/show.html.twig', [
            'game' => $game,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_game_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Game $game, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();
            if ($game) 
            {
                $imageName = uniqid().'.'.$image->guessExtension();
                $image->move(
                    $this->getParameter('upload_directory'),
                    $imageName
                );
                $game->setImage($imageName);
            }
            $entityManager->flush();
            $this->addFlash('success','Game successfully updated!');
    
            return $this->redirectToRoute('app_game_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('game/edit.html.twig', [
            'game' => $game,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_game_delete', methods: ['POST'])]
    public function delete(Request $request, Game $game, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$game->getId(), $request->request->get('_token'))) {
            $entityManager->remove($game);
            $entityManager->flush();
            $this->addFlash('error','Game successfully deleted!');
        }

        return $this->redirectToRoute('app_game_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/test', name: 'test', methods: ['GET'])]
    public function test_front(): Response
    {
        return $this->render('base.html.twig');
    }

    #[Route('/search', name: 'search', methods: ['GET'])]
    public function search(GameRepository $gameRepository, Request $request): Response
    {
        $query = $request->query->get('query');
        $games = $gameRepository->search($query);
        // Check if $games is an array
    if (!is_array($games)) {
        // If $games is not an array, return a JSON response with an error message
        return new JsonResponse(['error' => 'Games data is not in the expected format'], 500);
    }

    // If $games is an array, return a JSON response with the games data
    return new JsonResponse($games, 200);
    }
    

}
