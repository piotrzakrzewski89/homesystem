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
 * @ORM\Table(name="bicycle")
 * @ORM\Entity
 */
class Bicycle {

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
     * @ORM\Column(name="trip", type="decimal", precision=6, scale=2)
     */
    private $trip;

    /**
     * @ORM\Column(name="trip_time", type="time")
     */
    private $trip_time;

    /**
     * @ORM\Column(name="average_speed", type="decimal", precision=6, scale=2)
     */
    private $average_speed;

    /**
     * @ORM\Column(name="max_speed", type="decimal", precision=6, scale=2)
     */
    private $max_speed;

    /**
     * @ORM\Column(name="total_distance", type="decimal", precision=6, scale=2)
     */
    private $total_distance;

    /**
     * @ORM\Column(name="total_time", type="time")
     */
    private $total_time;

    /**
     * @ORM\Column(name="date_trip", type="datetime")
     */
    private $date_trip;

    /**
     * @var \DateTime
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
     * Set trip
     *
     * @param string $trip
     *
     * @return Bicycle
     */
    public function setTrip($trip)
    {
        $this->trip = $trip;

        return $this;
    }

    /**
     * Get trip
     *
     * @return string
     */
    public function getTrip()
    {
        return $this->trip;
    }

    /**
     * Set tripTime
     *
     * @param \DateTime $tripTime
     *
     * @return Bicycle
     */
    public function setTripTime($tripTime)
    {
        $this->trip_time = $tripTime;

        return $this;
    }

    /**
     * Get tripTime
     *
     * @return \DateTime
     */
    public function getTripTime()
    {
        return $this->trip_time;
    }

    /**
     * Set averageSpeed
     *
     * @param string $averageSpeed
     *
     * @return Bicycle
     */
    public function setAverageSpeed($averageSpeed)
    {
        $this->average_speed = $averageSpeed;

        return $this;
    }

    /**
     * Get averageSpeed
     *
     * @return string
     */
    public function getAverageSpeed()
    {
        return $this->average_speed;
    }

    /**
     * Set maxSpeed
     *
     * @param string $maxSpeed
     *
     * @return Bicycle
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->max_speed = $maxSpeed;

        return $this;
    }

    /**
     * Get maxSpeed
     *
     * @return string
     */
    public function getMaxSpeed()
    {
        return $this->max_speed;
    }

    /**
     * Set totalDistance
     *
     * @param string $totalDistance
     *
     * @return Bicycle
     */
    public function setTotalDistance($totalDistance)
    {
        $this->total_distance = $totalDistance;

        return $this;
    }

    /**
     * Get totalDistance
     *
     * @return string
     */
    public function getTotalDistance()
    {
        return $this->total_distance;
    }

    /**
     * Set totalTime
     *
     * @param \DateTime $totalTime
     *
     * @return Bicycle
     */
    public function setTotalTime($totalTime)
    {
        $this->total_time = $totalTime;

        return $this;
    }

    /**
     * Get totalTime
     *
     * @return \DateTime
     */
    public function getTotalTime()
    {
        return $this->total_time;
    }

    /**
     * Set dateTrip
     *
     * @param \DateTime $dateTrip
     *
     * @return Bicycle
     */
    public function setDateTrip($dateTrip)
    {
        $this->date_trip = $dateTrip;

        return $this;
    }

    /**
     * Get dateTrip
     *
     * @return \DateTime
     */
    public function getDateTrip()
    {
        return $this->date_trip;
    }

    /**
     * Set stamp
     *
     * @param \DateTime $stamp
     *
     * @return Bicycle
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
     * @return Bicycle
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
