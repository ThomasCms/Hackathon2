<?php
/**
 * Created by PhpStorm.
 * User: wilder6
 * Date: 19/12/18
 * Time: 17:38
 */

namespace App\DataFixtures;

use App\Entity\Participants;
use App\Entity\Player;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class ParticipantsFixtures extends Fixture implements DependentFixtureInterface
{

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    public function getDependencies()
    {
        return [EventFixtures::class];

                }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $toto = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 500; $i++) {
            $part = new Player();
            $part->setName(mb_strtoupper($toto->lastName));
            $part->setFirstname(ucwords($toto->firstName));
            $part->setPhoneNumber($toto->phoneNumber);
            $part->setmail($toto->companyEmail);

            $manager->persist($part);
            $part->addEventss($this->getReference('event_' .rand(0,9)));
        }
        $manager->flush();
    }
}
