<?php
// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\RetourEvent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class RetourEventFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $toto = Faker\Factory::create('fr_FR');
        // create 1000 events! Bam!
        for ($i = 0; $i < 10; $i++) {
            $product = new RetourEvent();
            $product->setIdEvenement($i);
            $product->setCategorieEvenement($toto->text);
            $product->setDateEvenement($toto->dateTimeBetween('-1 month', '+1 years'));
            $product->setExplicationEvenement($toto->text);
            $product->setNbreInscritsEvenement($toto->numberBetween(50, 100));
            $product->setNbreStartupEvenement($toto->numberBetween(1, 10));
            $product->setNbrePartenaireEvenement($toto->numberBetween(1, 10));
            $product->setNbreExternesEvenement($toto->numberBetween(1, 10));
            $product->setNbrePmeEvenement($toto->numberBetween(1, 10));
            $product->setNbrePorteurProjetEvenement($toto->numberBetween(1, 10));
            $product->setPresentsEvenement($product->getNbreExternesEvenement()+$product->getNbrePartenaireEvenement()+$product->getNbrePmeEvenement()+$product->getNbrePorteurProjetEvenement()+$product->getNbreStartupEvenement());
            $product->setResultatEvenement($toto->text);
            $product->setLiensFormulairesEvenement($toto->text);
            $product->setOrigineParticipationEvenement($toto->text);
            $product->setNbreMailInvitationEvenement($toto->numberBetween(10, 100));
            $product->setTauxSatisfactionEvenement($toto->numberBetween(10, 100));
            $product->setSuggestionEvenement($toto->text);

            $manager->persist($product);
        }

        $manager->flush();
    }
}