<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Musique;
use App\Repository\UserRepository;
use App\Repository\MusiqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HillController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(MusiqueRepository $repo)
    {
       
        $repo = $this->getDoctrine()->getRepository(Musique::class);

        $musiques = $repo->findAll(); 
        dump($musiques);

        return $this->render('hill/home.html.twig', [
            'controller_name' => 'HillController',
            'musiques' => $musiques 
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
