<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PorteFolioController extends AbstractController
{
    #[Route('/porte/folio', name: 'porte_folio')]
    public function index(): Response
    {
        return $this->render('porte_folio/index.html.twig', [
            'controller_name' => 'PorteFolioController',
        ]);
    }
}
