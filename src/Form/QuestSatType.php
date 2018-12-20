<?php

namespace App\Form;

use App\Entity\QuestSat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestSatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('origine')
            ->add('satisfaction')
            ->add('prospect')
            ->add('contact')
            ->add('recruter')
            ->add('investisseur')
            ->add('comment')
            ->add('suggestion')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => QuestSat::class,
        ]);
    }
}
