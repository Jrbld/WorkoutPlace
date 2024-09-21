<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ConnexionController extends AbstractController
{
    #[Route('/login', name: 'login', methods: ['GET', 'POST'])]

    public function login(): Response
    {
        return $this->render('connexion/connexion.twig');
    }

    #[Route('/logout', name: 'logout')]

    public function logout()
    {
        // return $this->render('connexion/deconnexion.twig');
    }
}
