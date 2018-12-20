<?php

namespace App\Form;

use App\Entity\RetourEvent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetourEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_evenement')
            ->add('categorie_evenement')
            ->add('date_evenement')
            ->add('explication_evenement')
            ->add('nbre_inscrits_evenement')
            ->add('presents_evenement')
            ->add('nbre_startup_evenement')
            ->add('nbre_partenaire_evenement')
            ->add('nbre_externes_evenement')
            ->add('nbre_pme_evenement')
            ->add('nbre_porteur_projet_evenement')
            ->add('resultat_evenement')
            ->add('liens_formulaires_evenement')
            ->add('suggestion_evenement')
            ->add('taux_satisfaction_evenement')
            ->add('origine_participation_evenement')
            ->add('nbre_mail_invitation_evenement')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RetourEvent::class,
        ]);
    }
}
