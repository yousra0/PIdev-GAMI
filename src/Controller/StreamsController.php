<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StreamsController extends AbstractController
{
    #[Route('/streams', name: 'app_streams')]
    public function index(): Response
    {
        return $this->render('Admin/streams.html.twig', [
            'controller_name' => 'StreamsController',
        ]);
    }
}
