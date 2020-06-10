<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class WeightType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder->add('user', EntityType::class, array(
            'label' => 'user',
            'class' => 'AppBundle:User',
            'choice_label' => 'username',
            'required' => true,
            ))
        ->add('weight', NumberType::class, array('label' => 'Waga',))
        ->add('adipose_tissue', NumberType::class, array('label' => 'Tkanka tłuszczowa',))
        ->add('water', NumberType::class, array('label' => 'Woda',))
        ->add('muscle_tissue', NumberType::class, array('label' => 'Tkanka mięśniowa',))
        ->add('bone_tissue', NumberType::class, array('label' => 'Tkanka Kostna',))
        ->add('kcal', NumberType::class, array('label' => 'KCAL',))
        ->add("submit", SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Weight'
            ));
    }

}