<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/service/{name}', name: 'show_service')]
    public function showService(string $name): Response
    {
        // Rendre le template Twig avec la variable $name
        return $this->render('service/show.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/go-to-home', name: 'go_to_home')]
    public function goToIndex(): Response
    {
        return $this->redirectToRoute('app_home');
    }
}
