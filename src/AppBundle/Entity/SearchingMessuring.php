<?php

namespace AppBundle\Entity;

/**
 * Description of Portfolio
 *
 * @author Piotr Zakrzewski
 * @copyright (c) 10/2018, Piotr Zakrzewski
 * 
 */

class SearchingMessuring {

    private $messuring_from;
    private $messuring_to;


    public function getMessuringFrom() {
        return $this->messuring_from;
    }
    
    public function setMessuringFrom($messuring_from) {
        $this->messuring_from = $messuring_from;
        return $this;
    }

    public function getMessuringTo() {
        return $this->messuring_to;
    }
    
    public function setMessuringTo($messuring_to) {
        $this->messuring_to = $messuring_to;
        return $this;
    }


}