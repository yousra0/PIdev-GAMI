<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrowseController extends AbstractController
{
    #[Route('/browse', name: 'app_browse')]
    public function index(): Response
    {
        return $this->render('admin/browse.html.twig', [
            'controller_name' => 'BrowseController',
        ]);
    }
}
