<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CarsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder->add('user', EntityType::class, array(
            'label' => 'user',
            'class' => 'AppBundle:User',
            'required' => true,
            'choice_label' => 'username',
            ))

        ->add("car_brand", TextType::class, array( 
        'label' => 'Marka Pojazdu', ))
        ->add("car_model", TextType::class, array( 
        'label' => 'Model Pojazdu', ))
        ->add("vin", TextType::class, array( 
            'label' => 'VIN',))
        ->add("engine_capacity", NumberType::class, array(
         'label' => 'Pojemność Silnika', ))
        ->add("horsepower", NumberType::class, array( 
            'label' => 'Moc Silnika', ))
        ->add("torque", NumberType::class, array( 
        'label' => 'Moment Obrotowy Silnika', ))
        ->add("year_production", NumberType::class, array( 
        'label' => 'Rok Produkcji', )) 
        ->add("submit", SubmitType::class, array( 
            'label' => 'Wybierz',));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cars'
            ));
    }

}