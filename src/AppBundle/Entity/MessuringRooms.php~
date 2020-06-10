<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Messuring Rooms
 *
 * @author Piotr Zakrzewski
 * @copyright (c) 09/2018, Piotr Zakrzewski
 * 
 */

/**
 * @ORM\Table(name="messuring_rooms")
 * @ORM\Entity
 */
class MessuringRooms {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="temp", type="decimal", precision=4, scale=1)
     */
    private $temp;

    /**
     * @ORM\Column(name="humidity", type="decimal", precision=4, scale=1)
     */
    private $humidity;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="stamp", type="datetime")
    */
    private $stamp;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set temp
     *
     * @param string $temp
     *
     * @return MessuringRooms
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp
     *
     * @return string
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set humidity
     *
     * @param string $humidity
     *
     * @return MessuringRooms
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;

        return $this;
    }

    /**
     * Get humidity
     *
     * @return string
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set stamp
     *
     * @param \DateTime $stamp
     *
     * @return MessuringRooms
     */
    public function setStamp($stamp)
    {
        $this->stamp = $stamp;

        return $this;
    }

    /**
     * Get stamp
     *
     * @return \DateTime
     */
    public function getStamp()
    {
        return $this->stamp;
    }
}
