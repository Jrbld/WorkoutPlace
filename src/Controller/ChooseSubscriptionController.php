<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class ChooseSubscriptionController extends AbstractController
{
    #[Route('/choisir-un-abonnement', name: 'app_choose_subscription')]

    public function index(Request $request, EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = $security->getUser();
        $subscription = null;

        if ($user) {

            if ($request->isMethod('POST')) {

                $currentSubscription = $user->getSubscriptionName();

                if($currentSubscription){
                    /* $this->addFlash('error', 'Vous avez déjà choisi un abonnement.'); */
                    return $this->redirectToRoute('app_choose_subscription');
                }
            
                $subscriptionName = $request->request->get('subscription_name');
    
                if ($subscriptionName) {
                    $user->setSubscriptionName($subscriptionName);

                    $entityManager->persist($user);
                    $entityManager->flush();
    
                    /* $this->addFlash('success', 'Votre abonnement '.$subscriptionName.' a bien été pris en compte.'); */
                    return $this->redirectToRoute('app_choose_subscription');
                }
                
            } else {
                $subscription = $user->getSubscriptionName();
            }
            
        }

        return $this->render('choose_subscription/choose_subscription.twig', [
            'subscription' => $subscription
        ]);
    }
}