<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Departements;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $departements = new Departements();
         $departements->setName('Direction');
         $departements->setEmail('Direction@EifficienceIt.com');
         $manager->persist($departements);

         $departements = new Departements();
         $departements->setName('RH');
         $departements->setEmail('RH@EifficienceIt.com');
         $manager->persist($departements);

         $departements = new Departements();
         $departements->setName('Communication');
         $departements->setEmail('Communication@EifficienceIt.com');
         $manager->persist($departements);

         $departements = new Departements();
         $departements->setName('Développement');
         $departements->setEmail('Developpement@EifficienceIt.com');
         $manager->persist($departements);

        $manager->flush();
    }
}
