<?php

namespace App\Form;

use App\Entity\QuestSat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestSatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('origine', TextType::class, [
            'label' => "Comment avez-vous eu connaissance de cet évènement ?",
        ]);
        $builder->add('satisfaction', ChoiceType::class, [
            'choices' => [
                '0' => '0',
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                '10' => '10',
            ],
            'label' => "Avez-vous apprécié cet évènement ?",
        ]);
        $builder->add('prospect', ChoiceType::class, [
            'choices' => [
                '0' => '0',
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                '10' => '10',
            ],
        'label' => "Combien avez-vous trouvé de prospects ?",
        ]);
        $builder->add('origine', TextType::class, [

        'label' => "Comment avez-vous eu connaissance de cet évènement ?",
        ]);
        $builder->add('contact',ChoiceType::class, [
            'choices' => [
                '0' => '0',
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                '10' => '10',
            ],
        'label' => "Combien de contact avez-vous trouvé lors de cet évènement ?",
        ]);
        $builder->add('recruter', ChoiceType::class, [
            'choices' => [
                '0' => '0',
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                '10' => '10',
            ],
        'label' => "Combien de collaborateurs avez-vous trouvé grace à cet évènement ?",
        ]);
        $builder->add('investisseur', ChoiceType::class, [
            'choices' => [
                '0' => '0',
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                '10' => '10',
            ],
        'label' => "Combien d'investisseur(s) avez-vous trouvé grace à cet évènement ?",
        ]);
        $builder->add('comment', TextType::class, [
        'label' => "Si vous avez des précisions pour vos réponses à nous faire partager, c'est ici :",
        ]);
        $builder->add('suggestion', TextType::class, [
            'label' => "Si vous avez des suggestions à nous faire, le clavier est à vous !",
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => QuestSat::class,
        ]);
    }
}
