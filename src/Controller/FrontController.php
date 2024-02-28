<?php

namespace App\Controller;

use App\Entity\Game;
use App\Repository\GameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/front')]
class FrontController extends AbstractController
{
    #[Route('/', name: 'app_front')]
    public function index(GameRepository $gameRepository): Response
    {
        return $this->render('front/index.html.twig', [
            'games' => $gameRepository->findAll(),
        ]);
        
    }
     #[Route('/{id}', name: 'app_front_show')]
    public function show(Game $game): Response
    {
        return $this->render('front/affiche.html.twig', [
            'game' => $game,
        ]);
    }
}
