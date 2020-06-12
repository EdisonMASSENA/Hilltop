<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Musique;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MusiqueFixtures extends Fixture{

    public function load(ObjectManager $manager){

        $faker = \Faker\Factory::create('fr_FR');
       
            for($j = 1; $j <= mt_rand(10,13); $j++)
            {
                $musique = new Musique;

                $musique->setArtiste($faker->name())
                        ->setAlbum($faker->word())
                        ->setTitre($faker->word())
                        ->setImage($faker->imageUrl());

                $manager->persist($musique);
        }
        
        $manager->flush();

    }
}