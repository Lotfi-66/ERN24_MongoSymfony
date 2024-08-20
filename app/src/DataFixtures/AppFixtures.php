<?php

namespace App\DataFixtures;

use App\Document\Jeu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $jeu =new Jeu();
        $manager->flush();
    }
}
