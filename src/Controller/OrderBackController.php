<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderBackController extends AbstractController
{
    #[Route('/order/back', name: 'app_order_back')]
    public function index(): Response
    {
        return $this->render('order_back/index.html.twig', [
            'controller_name' => 'OrderBackController',
        ]);
    }


    
}


