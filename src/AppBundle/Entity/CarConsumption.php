<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Openvpn
 *
 * @author Piotr Zakrzewski
 * @copyright (c) 10/2018, Piotr Zakrzewski
 * 
 */

/**
 * @ORM\Table(name="car_consumption")
 * @ORM\Entity
 */
class CarConsumption {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Cars")
     * @ORM\JoinColumn(name="cars", referencedColumnName="id")
     */
    private $cars;

    /**
     * @ORM\Column(name="cost_type", type="string", length=100)
     */
    private $cost_type;

    /**
     * @ORM\Column(name="fuel_type", type="string", length=100)
     */
    private $fuel_type;

    /**
     * @ORM\Column(name="trip_odometer", type="decimal", precision=9, scale=1)
     */
    private $trip_odometer;


    /**
     * @ORM\Column(name="odometer", type="decimal", precision=9, scale=1)
     */
    private $odometer;

    /**
     * @ORM\Column(name="quantity", type="decimal", precision=5, scale=2)
     */
    private $quantity;

    /**
     * @ORM\Column(name="cost", type="decimal", precision=5, scale=2)
     */
    private $cost;

    /**
     * @ORM\Column(name="notes",  type="text")
     */
    private $notes;

    /**
     * @ORM\Column(name="fueling_type",  type="string", length=100)
     */
    private $fueling_type;

    /**
     * @ORM\Column(name="tires", type="string", length=100)
     */
    private $tires;

    /**
     * @ORM\Column(name="driving_style", type="string", length=100)
     */
    private $driving_style;

    /**
     * @ORM\Column(name="bc_consumption", type="decimal", precision=5, scale=2)
     */
    private $bc_consumption;


    /**
     * @ORM\Column(name="bc_avg_speed", type="decimal", precision=5, scale=2)
     */
    private $bc_avg_speed;

    /**
     * @ORM\Column(name="ac", type="decimal", precision=3)
     */
    private $ac;

    
    /**
    * @var \DateTime
    *
    * @ORM\Column(name="stamp", type="datetime")
    */
    private $stamp;

        public function __construct()
    {
    $this->stamp = new \DateTime();
    }



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
     * Set costType
     *
     * @param string $costType
     *
     * @return Car
     */
    public function setCostType($costType)
    {
        $this->cost_type = $costType;

        return $this;
    }

    /**
     * Get costType
     *
     * @return string
     */
    public function getCostType()
    {
        return $this->cost_type;
    }

    /**
     * Set fuelType
     *
     * @param string $fuelType
     *
     * @return Car
     */
    public function setFuelType($fuelType)
    {
        $this->fuel_type = $fuelType;

        return $this;
    }

    /**
     * Get fuelType
     *
     * @return string
     */
    public function getFuelType()
    {
        return $this->fuel_type;
    }

    /**
     * Set tripOdometer
     *
     * @param string $tripOdometer
     *
     * @return Car
     */
    public function setTripOdometer($tripOdometer)
    {
        $this->trip_odometer = $tripOdometer;

        return $this;
    }

    /**
     * Get tripOdometer
     *
     * @return string
     */
    public function getTripOdometer()
    {
        return $this->trip_odometer;
    }

    /**
     * Set odometer
     *
     * @param string $odometer
     *
     * @return Car
     */
    public function setOdometer($odometer)
    {
        $this->odometer = $odometer;

        return $this;
    }

    /**
     * Get odometer
     *
     * @return string
     */
    public function getOdometer()
    {
        return $this->odometer;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Car
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return Car
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Car
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set fuelingType
     *
     * @param string $fuelingType
     *
     * @return Car
     */
    public function setFuelingType($fuelingType)
    {
        $this->fueling_type = $fuelingType;

        return $this;
    }

    /**
     * Get fuelingType
     *
     * @return string
     */
    public function getFuelingType()
    {
        return $this->fueling_type;
    }

    /**
     * Set tires
     *
     * @param string $tires
     *
     * @return Car
     */
    public function setTires($tires)
    {
        $this->tires = $tires;

        return $this;
    }

    /**
     * Get tires
     *
     * @return string
     */
    public function getTires()
    {
        return $this->tires;
    }

    /**
     * Set drivingStyle
     *
     * @param string $drivingStyle
     *
     * @return Car
     */
    public function setDrivingStyle($drivingStyle)
    {
        $this->driving_style = $drivingStyle;

        return $this;
    }

    /**
     * Get drivingStyle
     *
     * @return string
     */
    public function getDrivingStyle()
    {
        return $this->driving_style;
    }

    /**
     * Set bcConsumption
     *
     * @param string $bcConsumption
     *
     * @return Car
     */
    public function setBcConsumption($bcConsumption)
    {
        $this->bc_consumption = $bcConsumption;

        return $this;
    }

    /**
     * Get bcConsumption
     *
     * @return string
     */
    public function getBcConsumption()
    {
        return $this->bc_consumption;
    }

    /**
     * Set bcAvgSpeed
     *
     * @param string $bcAvgSpeed
     *
     * @return Car
     */
    public function setBcAvgSpeed($bcAvgSpeed)
    {
        $this->bc_avg_speed = $bcAvgSpeed;

        return $this;
    }

    /**
     * Get bcAvgSpeed
     *
     * @return string
     */
    public function getBcAvgSpeed()
    {
        return $this->bc_avg_speed;
    }

    /**
     * Set ac
     *
     * @param string $ac
     *
     * @return Car
     */
    public function setAc($ac)
    {
        $this->ac = $ac;

        return $this;
    }

    /**
     * Get ac
     *
     * @return string
     */
    public function getAc()
    {
        return $this->ac;
    }

    /**
     * Set stamp
     *
     * @param \DateTime $stamp
     *
     * @return Car
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

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Car
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set cars
     *
     * @param \AppBundle\Entity\Cars $cars
     *
     * @return CarConsumption
     */
    public function setCars(\AppBundle\Entity\Cars $cars = null)
    {
        $this->cars = $cars;

        return $this;
    }

    /**
     * Get cars
     *
     * @return \AppBundle\Entity\Cars
     */
    public function getCars()
    {
        return $this->cars;
    }
}
