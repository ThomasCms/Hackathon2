<?php
/**
 * Created by PhpStorm.
 * User: wilder2
 * Date: 20/12/18
 * Time: 09:01
 */

namespace App\DataFixtures;

use App\Entity\Event;
use App\Entity\QuestSat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class QuestSatFixtures extends Fixture
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
            $part = new QuestSat();
            $part->setOrigine(ucwords($toto->text(20)));
            $part->setSatisfaction($toto->numberBetween(0, 10));
            $part->setProspect($toto->numberBetween(0, 10));
            $part->setContact($toto->numberBetween(0, 10));
            $part->setRecruter($toto->numberBetween(0, 10));
            $part->setInvestisseur($toto->numberBetween(0, 10));
            $part->setComment($toto->text(20));
            $part->setSuggestion($toto->text(20));
            $manager->persist($part);
        }
        $manager->flush();
    }
}
