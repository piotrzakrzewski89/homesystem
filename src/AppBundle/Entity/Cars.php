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
 * @ORM\Table(name="cars")
 * @ORM\Entity
 */
class Cars {

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
     * @ORM\Column(name="car_brand", type="string", length=100)
     */
    private $car_brand;

    /**
     * @ORM\Column(name="car_model", type="string", length=100)
     */
    private $car_model;

    /**
     * @ORM\Column(name="vin", type="string", length=100)
     */
    private $vin;

    /**
     * @ORM\Column(name="engine_capacity", type="decimal", precision=6 ,scale=2)
     */
    private $engine_capacity;


    /**
     * @ORM\Column(name="horsepower", type="decimal", precision=4)
     */
    private $horsepower;

    /**
     * @ORM\Column(name="torque", type="decimal", precision=4)
     */
    private $torque;

    /**
     * @ORM\Column(name="year_production", type="decimal", precision=4)
     */
    private $year_production;

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
     * Set carBrand
     *
     * @param string $carBrand
     *
     * @return Cars
     */
    public function setCarBrand($carBrand)
    {
        $this->car_brand = $carBrand;

        return $this;
    }

    /**
     * Get carBrand
     *
     * @return string
     */
    public function getCarBrand()
    {
        return $this->car_brand;
    }

    /**
     * Set carModel
     *
     * @param string $carModel
     *
     * @return Cars
     */
    public function setCarModel($carModel)
    {
        $this->car_model = $carModel;

        return $this;
    }

    /**
     * Get carModel
     *
     * @return string
     */
    public function getCarModel()
    {
        return $this->car_model;
    }

    /**
     * Set vin
     *
     * @param string $vin
     *
     * @return Cars
     */
    public function setVin($vin)
    {
        $this->vin = $vin;

        return $this;
    }

    /**
     * Get vin
     *
     * @return string
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * Set engineCapacity
     *
     * @param string $engineCapacity
     *
     * @return Cars
     */
    public function setEngineCapacity($engineCapacity)
    {
        $this->engine_capacity = $engineCapacity;

        return $this;
    }

    /**
     * Get engineCapacity
     *
     * @return string
     */
    public function getEngineCapacity()
    {
        return $this->engine_capacity;
    }

    /**
     * Set horsepower
     *
     * @param string $horsepower
     *
     * @return Cars
     */
    public function setHorsepower($horsepower)
    {
        $this->horsepower = $horsepower;

        return $this;
    }

    /**
     * Get horsepower
     *
     * @return string
     */
    public function getHorsepower()
    {
        return $this->horsepower;
    }

    /**
     * Set torque
     *
     * @param string $torque
     *
     * @return Cars
     */
    public function setTorque($torque)
    {
        $this->torque = $torque;

        return $this;
    }

    /**
     * Get torque
     *
     * @return string
     */
    public function getTorque()
    {
        return $this->torque;
    }

    /**
     * Set yearProduction
     *
     * @param string $yearProduction
     *
     * @return Cars
     */
    public function setYearProduction($yearProduction)
    {
        $this->year_production = $yearProduction;

        return $this;
    }

    /**
     * Get yearProduction
     *
     * @return string
     */
    public function getYearProduction()
    {
        return $this->year_production;
    }

    /**
     * Set stamp
     *
     * @param \DateTime $stamp
     *
     * @return Cars
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
     * @return Cars
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
}
