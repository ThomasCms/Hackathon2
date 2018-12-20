<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RetourEventController extends AbstractController
{
    /**
     * @Route("/retour/event", name="retour_event")
     */
    public function index()
    {
        return $this->render('retour_event/index.html.twig', [
            'controller_name' => 'RetourEventController',
        ]);
    }
}
