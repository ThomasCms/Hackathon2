<?php
/**
 * Created by PhpStorm.
 * User: wilder6
 * Date: 19/12/18
 * Time: 17:38
 */

namespace App\DataFixtures;

use App\Entity\Participants;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class ParticipantsFixtures extends Fixture
{

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    public function getDependencies()
    {
        // TODO: Implement getDependencies() method.
    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $toto = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {

            $part = new Participants();
            $part->setNom(mb_strtoupper($toto->lastName));
            $part->setPrenom(ucwords($toto->firstName));
            $part->setEntreprise($toto->company);
            $part->setEmail($toto->companyEmail);
            $part->setPresence(false);

            $manager->persist($part);

        }
        $manager->flush();
    }
}