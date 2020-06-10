<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class SearchingMessuringType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
        ->add('messuring_from', DateTimeType::class, array(
            'input' => 'datetime',
            'label' => "Data od",
            'widget' => 'single_text',
            'data' => new \DateTime("-1 day"),
                   
        ))
        ->add('messuring_to', DateTimeType::class, array(
            'input' => 'datetime',
            'data' => new \DateTime("now"),
            'label' => "Data do",
            'widget' => 'single_text',
          
        ))
        ->add('submit', SubmitType::class, array('label' => "Szukaj"));

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SearchingMessuring'
            ));
    }

}