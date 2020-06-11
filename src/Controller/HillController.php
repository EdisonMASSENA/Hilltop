<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HillController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        return $this->render('hill/home.html.twig', [
            'controller_name' => 'HillController',
        ]);
    }

    /**
     * @Route("/player", name="player")
     */
    public function player()
    {
        return $this->render('hill/player.html.twig', [
            'controller_name' => 'HillController',
        ]);
    }
}
