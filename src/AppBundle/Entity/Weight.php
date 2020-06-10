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
 * @ORM\Table(name="weight")
 * @ORM\Entity
 */
class Weight {

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
     * @ORM\Column(name="weight", type="decimal", precision=3, scale=1)
     */
    private $weight;

    /**
     * @ORM\Column(name="adipose_tissue", type="decimal", precision=5, scale=2)
     */
    private $adipose_tissue;

    /**
     * @ORM\Column(name="water", type="decimal", precision=5, scale=2)
     */
    private $water;

    /**
     * @ORM\Column(name="muscle_tissue", type="decimal", precision=5, scale=2)
     */
    private $muscle_tissue;

    /**
     * @ORM\Column(name="bone_tissue", type="decimal", precision=5, scale=2)
     */
    private $bone_tissue;

    /**
     * @ORM\Column(name="kcal", type="decimal", precision=4)
     */
    private $kcal;

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
     * Set weight
     *
     * @param string $weight
     *
     * @return Weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set adiposeTissue
     *
     * @param string $adiposeTissue
     *
     * @return Weight
     */
    public function setAdiposeTissue($adiposeTissue)
    {
        $this->adipose_tissue = $adiposeTissue;

        return $this;
    }

    /**
     * Get adiposeTissue
     *
     * @return string
     */
    public function getAdiposeTissue()
    {
        return $this->adipose_tissue;
    }

    /**
     * Set water
     *
     * @param string $water
     *
     * @return Weight
     */
    public function setWater($water)
    {
        $this->water = $water;

        return $this;
    }

    /**
     * Get water
     *
     * @return string
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * Set muscleTissue
     *
     * @param string $muscleTissue
     *
     * @return Weight
     */
    public function setMuscleTissue($muscleTissue)
    {
        $this->muscle_tissue = $muscleTissue;

        return $this;
    }

    /**
     * Get muscleTissue
     *
     * @return string
     */
    public function getMuscleTissue()
    {
        return $this->muscle_tissue;
    }

    /**
     * Set boneTissue
     *
     * @param string $boneTissue
     *
     * @return Weight
     */
    public function setBoneTissue($boneTissue)
    {
        $this->bone_tissue = $boneTissue;

        return $this;
    }

    /**
     * Get boneTissue
     *
     * @return string
     */
    public function getBoneTissue()
    {
        return $this->bone_tissue;
    }

    /**
     * Set kcal
     *
     * @param string $kcal
     *
     * @return Weight
     */
    public function setKcal($kcal)
    {
        $this->kcal = $kcal;

        return $this;
    }

    /**
     * Get kcal
     *
     * @return string
     */
    public function getKcal()
    {
        return $this->kcal;
    }

    /**
     * Set stamp
     *
     * @param \DateTime $stamp
     *
     * @return Weight
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
     * @return Weight
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
