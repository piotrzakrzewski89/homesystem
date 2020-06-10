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

class BicycleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder->add('user', EntityType::class, array(
            'label' => 'user',
            'class' => 'AppBundle:User',
            'choice_label' => 'username',
            'required' => true,
            ))
        ->add('trip', NumberType::class, array())
        ->add('trip_time', TimeType::class, array())
        ->add('average_speed', NumberType::class, array())
        ->add('max_speed', NumberType::class, array())
        ->add('total_distance', NumberType::class, array())
        ->add('total_time', TimeType::class, array())
        ->add('date_trip', DateTimeType::class, array())
        ->add("submit", SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Bicycle'
            ));
    }

}