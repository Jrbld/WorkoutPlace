<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LessonController extends AbstractController
{
    #[Route('/cours', name: 'lesson')]

    public function index(Request $request): Response
    {
        return $this->render('lesson/lesson.twig');
    }

    #[Route(path: '/cours/{slug}', name: 'lesson.show', requirements:['slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug): Response
    {
        return $this->render('/lesson/lesson.show.twig', [
            'slug' => $slug
        ]);
    }
}
