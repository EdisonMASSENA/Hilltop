<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Musique;

class MusiqueFixtures extends Fixture{

    public function load(ObjectManager $manager){

        for($i = 1; $i <= 10; $i++) { 
            $musique = new Musique();

            $musique->setArtiste("Titre de l'article n°$i") 
                    ->setAlbum("<p>Contenu de l'article n°$i</p>") 
                    ->setTitre("http://placehold.it/250x150");

            $manager->persist($musique);
        }
    }
}