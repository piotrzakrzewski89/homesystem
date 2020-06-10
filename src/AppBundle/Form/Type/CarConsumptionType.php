<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CarConsumptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder->add('user', EntityType::class, array(
            'label' => 'user',
            'class' => 'AppBundle:User',
            'required' => true,
            'choice_label' => 'username',
            ))
        ->add('cost_type', ChoiceType::class, array(
            'label' => 'Typ kosztu',
            'choices' => array(
                'Takowanie' => 'fueling',
                'Serwis' => 'service',)))
        ->add('fuel_type', ChoiceType::class, array(
         'label' => 'Typ tankowania',
         'choices' => array(
                'Do Pełna' => 'full',
                'Nie Do Pełna' => 'notfull')))
        ->add('trip_odometer', NumberType::class, array(
         'label' => 'Dystans przejechany',))
        ->add('odometer', NumberType::class, array(
         'label' => 'Przebieg',))
        ->add('quantity', NumberType::class, array(
         'label' => 'Ilość paliwa',))
        ->add('cost', NumberType::class, array(
         'label' => 'Koszt',))
        ->add('fueling_type', ChoiceType::class, array(
         'label' => 'Typ Paliwa',
         'choices' => array(
                'BP Diesel Ultimate' => 'bpultiamte',
                'BP Diesel' => 'bpon')))
        ->add('tires', ChoiceType::class, array(
         'label' => 'Opony',
        'choices' => array(
                'Letnie' => 'summer',
                'Zimowe' => 'winter')))
        ->add('driving_style', ChoiceType::class, array(
         'label' => 'Styl Jazdy',
        'choices' => array(
                'Ekonomiczny' => 'eco',
                'Normalny' => 'normal',
                'Dynamiczny' => 'dynamic')))
        ->add('bc_consumption', NumberType::class, array(
         'label' => 'Spalanie wg komputera',))
        ->add('bc_avg_speed', NumberType::class, array(
         'label' => 'Śr. prędkość wg komputera',))
        ->add('ac', ChoiceType::class, array(
         'label' => 'Klimatyzacja',
     'choices' => array(
                '0' => 0,
                '10' => 10,
                '20' => 20,
                '30' => 30,
                '40' => 40,
                '50' => 50,
                '60' => 60,
                '70' => 70,
                '80' => 80,
                '90' => 90,
                '100' => 100)))            
        ->add('notes', TextareaType::class, array(
         'label' => 'Dodatkowe informacje',
         'required' => false,))
        ->add("submit", SubmitType::class, array( 
            'label' => 'user',));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\CarConsumption'
            ));
    }

}