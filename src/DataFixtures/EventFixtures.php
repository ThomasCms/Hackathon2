<?php
/**
 * Created by PhpStorm.
 * User: wilder2
 * Date: 20/12/18
 * Time: 09:01
 */

namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class EventFixtures extends Fixture
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
            $part = new Event();
            $part->setNom(ucwords($toto->text(20)));
            $part->setDate($toto->dateTimeBetween('-1 month', '+1 years'));
            $part->setLieu($toto->address);
            $part->setDescription($toto->text);
            $part->setBilan($toto->text);
            $manager->persist($part);
            $this->addReference('event_' . $i, $part);
        }
        $manager->flush();
    }

}