<?php

namespace App\Controller;

use App\Entity\Musique;
use App\Repository\MusiqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HillController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(MusiqueRepository $repo)
    {
        
        $repo = $this->getDoctrine()->getRepository(Musique::class);

        $musique = $repo->findAll();

        return $this->render('hill/home.html.twig', [
            'controller_name' => 'HillController',
            'musique' => $musique
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
