<?php

namespace AppBundle\Entity;

/**
 * Description of Portfolio
 *
 * @author Piotr Zakrzewski
 * @copyright (c) 10/2018, Piotr Zakrzewski
 * 
 */

class ChooseCar {

    private $cars;


    public function getCars() {
        return $this->cars;
    }
    
    public function setCars($cars) {
        $this->cars = $cars;
        return $this;
    }
}