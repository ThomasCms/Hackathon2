<?php

namespace App\Form;

use App\Entity\QuestSat;
use Symfony\Component\Form\AbstractType;
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
        $builder->add('satisfaction', TextType::class, [
            'label' => "Avez-vous apprécié cet évènement ?",
        ]);
        $builder->add('prospect', TextType::class, [
        'label' => "Combien avez-vous trouvé de prospects ?",
        ]);
        $builder->add('origine', TextType::class, [
        'label' => "Comment avez-vous eu connaissance de cet évènement ?",
        ]);
        $builder->add('contact', TextType::class, [
        'label' => "Combien de contact avez-vous trouvé lors de cet évènement ?",
        ]);
        $builder->add('recruter', TextType::class, [
        'label' => "Combien de collaborateurs avez-vous trouvé grace à cet évènement ?",
        ]);
        $builder->add('investisseur', TextType::class, [
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
