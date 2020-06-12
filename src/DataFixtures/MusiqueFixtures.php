<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Musique;

class MusiqueFixtures extends Fixture{

    public function load(ObjectManager $manager){

        for($i = 1; $i <= 10; $i++) { 
          
            $musique = new Musique();

            $musique->setArtiste("Artiste n°$i") 
                    ->setAlbum("<p>Album n°$i</p>") 
                    ->setTitre("Titre");

            $manager->persist($musique);
        }
        
        $manager->flush();

    }
}