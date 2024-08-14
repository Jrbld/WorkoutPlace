<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SpaceController extends AbstractController
{
    #[Route('/espaces', name: 'space')]

    public function index(Request $request): Response
    {
        return $this->render('space/space.twig');
    }

    #[Route(path: '/espaces/{slug}', name: 'space.show', requirements:['slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug): Response
    {
        return $this->render('/space/space.show.twig', [
            'slug' => $slug
        ]);
    }
}
