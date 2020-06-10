<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use App\Entity\MessuringRooms;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionResolver\OptionResolver;

class MessuringRoomsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder
        ->add("stamp", DateTimeType::class, [
        	'format' => 'yyyy-MM-dd HH:mm:ss',
        	'label' => "Data zakończenia",
        	'data' => new \DateTime('+1 day + 1hours')])
        ->add("submit", SubmitType::class, ['label' => "Zapisz"]);
    }

    public function configureOpitions(OptionResolver $resolver){
        $resolver->setDefaults(["data_class" => Action::class ]);
    }

}