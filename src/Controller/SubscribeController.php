<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SubscribeController extends AbstractController
{
    #[Route('/abonnements', name: 'subscribe')]

    public function index(Request $request): Response
    {
        return $this->render('subscribe/subscribe.twig');
    }
}
