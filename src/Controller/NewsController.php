<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NewsController extends AbstractController
{
    #[Route('/actualites', name: 'news')]

    public function index(Request $request): Response
    {
        return $this->render('news/news.twig');
    }

    #[Route(path: '/actualites/{slug}', name: 'news.show', requirements:['slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug): Response
    {
        return $this->render('/news/news.show.twig', [
            'slug' => $slug
        ]);
    }
}
