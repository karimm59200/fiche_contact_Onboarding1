<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\department;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $department = new department();
         $department->setName('Direction');
         $department->setEmail('Direction@EifficienceIt.com');
         $manager->persist($department);

         $department = new department();
         $department->setName('RH');
         $department->setEmail('RH@EifficienceIt.com');
         $manager->persist($department);

         $department = new department();
         $department->setName('Communication');
         $department->setEmail('Communication@EifficienceIt.com');
         $manager->persist($department);

         $department = new department();
         $department->setName('Développement');
         $department->setEmail('Developpement@EifficienceIt.com');
         $manager->persist($department);

        $manager->flush();
    }
}
