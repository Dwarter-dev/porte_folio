<?php

namespace App\Controller;

use App\Repository\ProjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PorteFolioController extends AbstractController
{
    #[Route('/porte/folio', name: 'porte_folio')]
    public function index(ProjetRepository $projetRepository): Response
    {
        $projet = $projetRepository->findAll();

        return $this->render('porte_folio/index.html.twig', [
            'projets' => $projet,
        ]);
    }
}
