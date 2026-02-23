<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipController extends AbstractController
{
    #[Route("/starships/{id<\d+>}", name: 'app_starship_show')]
    public function show(int $id, StarshipRepository $repository): Response
    {
        $ships = $repository->find($id);
        if (!$ships) {
            throw $this->createNotFoundException('Starship not found');
        }
        return $this->render('starship/show.html.twig', [
            'ship' => $ships,
        ]);
    }
}
