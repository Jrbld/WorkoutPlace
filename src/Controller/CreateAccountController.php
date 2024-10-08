<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CreateAccountController extends AbstractController
{
    #[Route('/create', name: 'createAccount')]

    public function index(Request $request): Response
    {
        return $this->render('createAccount/createAccount.twig');
    }
}
