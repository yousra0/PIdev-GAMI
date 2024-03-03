<?php

namespace App\Controller;

use App\Entity\Game;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Jeu;

class TicTacToeController extends AbstractController
{
    #[Route('/tic-tac-toe', name: 'app_tic_tac_toe')]
    public function index(): Response
    {
        // Récupérer les données du jeu Tic Tac Toe depuis la base de données
        $jeu = $this->getDoctrine()->getRepository(Game::class)->findOneBy(['name' => 'Tic Tac Toe']);
        return $this->render('tic_tac_toe/index.html.twig', [
            'controller_name' => 'TicTacToeController',
        ]);
    }
}
