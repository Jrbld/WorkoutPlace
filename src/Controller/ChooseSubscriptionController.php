<?php

namespace App\Controller;

use App\Entity\Subscription;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class ChooseSubscriptionController extends AbstractController
{
    #[Route('/choisir-un-abonnement', name: 'app_choose_subscription')]

    public function index(Request $request): Response
    {
        return $this->render('choose_subscription/choose_subscription.twig');
    }
}
