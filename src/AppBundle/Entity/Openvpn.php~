<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Openvpn
 *
 * @author Piotr Zakrzewski
 * @copyright (c) 09/2018, Piotr Zakrzewski
 * 
 */

/**
 * @ORM\Table(name="openvpn")
 * @ORM\Entity
 */
class Openvpn {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="common_name", type="string", length=100)
     */
    private $common_name;

    /**
     * @ORM\Column(name="virtual_address", type="string", length=100)
     */
    private $virtual_address;

    /**
     * @ORM\Column(name="real_address", type="string", length=100)
     */
    private $real_address;

    /**
     * @ORM\Column(name="bytes_received", type="bigint")
     */
    private $bytes_received;

    /**
     * @ORM\Column(name="bytes_sent", type="bigint")
     */
    private $bytes_sent;

    /**
     * @ORM\Column(name="connected_since", type="datetime")
     */
    private $connected_since;

    /**
     * @ORM\Column(name="last_ref", type="datetime")
     */
    private $last_ref;

    /**
     * @ORM\Column(name="last_online", type="datetime")
     */
    private $last_online;

    /**
     * @ORM\Column(name="status", type="string", length=10)
     */
    private $status;

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
     * Set commonName
     *
     * @param string $commonName
     *
     * @return Openvpn
     */
    public function setCommonName($commonName)
    {
        $this->common_name = $commonName;

        return $this;
    }

    /**
     * Get commonName
     *
     * @return string
     */
    public function getCommonName()
    {
        return $this->common_name;
    }

    /**
     * Set virtualAddress
     *
     * @param string $virtualAddress
     *
     * @return Openvpn
     */
    public function setVirtualAddress($virtualAddress)
    {
        $this->virtual_address = $virtualAddress;

        return $this;
    }

    /**
     * Get virtualAddress
     *
     * @return string
     */
    public function getVirtualAddress()
    {
        return $this->virtual_address;
    }

    /**
     * Set realAddress
     *
     * @param string $realAddress
     *
     * @return Openvpn
     */
    public function setRealAddress($realAddress)
    {
        $this->real_address = $realAddress;

        return $this;
    }

    /**
     * Get realAddress
     *
     * @return string
     */
    public function getRealAddress()
    {
        return $this->real_address;
    }

    /**
     * Set bytesReceived
     *
     * @param integer $bytesReceived
     *
     * @return Openvpn
     */
    public function setBytesReceived($bytesReceived)
    {
        $this->bytes_received = $bytesReceived;

        return $this;
    }

    /**
     * Get bytesReceived
     *
     * @return integer
     */
    public function getBytesReceived()
    {
        return $this->bytes_received;
    }

    /**
     * Set bytesSent
     *
     * @param integer $bytesSent
     *
     * @return Openvpn
     */
    public function setBytesSent($bytesSent)
    {
        $this->bytes_sent = $bytesSent;

        return $this;
    }

    /**
     * Get bytesSent
     *
     * @return integer
     */
    public function getBytesSent()
    {
        return $this->bytes_sent;
    }

    /**
     * Set connectedSince
     *
     * @param \DateTime $connectedSince
     *
     * @return Openvpn
     */
    public function setConnectedSince($connectedSince)
    {
        $this->connected_since = $connectedSince;

        return $this;
    }

    /**
     * Get connectedSince
     *
     * @return \DateTime
     */
    public function getConnectedSince()
    {
        return $this->connected_since;
    }

    /**
     * Set lastRef
     *
     * @param \DateTime $lastRef
     *
     * @return Openvpn
     */
    public function setLastRef($lastRef)
    {
        $this->last_ref = $lastRef;

        return $this;
    }

    /**
     * Get lastRef
     *
     * @return \DateTime
     */
    public function getLastRef()
    {
        return $this->last_ref;
    }

    /**
     * Set lastOnline
     *
     * @param \DateTime $lastOnline
     *
     * @return Openvpn
     */
    public function setLastOnline($lastOnline)
    {
        $this->last_online = $lastOnline;

        return $this;
    }

    /**
     * Get lastOnline
     *
     * @return \DateTime
     */
    public function getLastOnline()
    {
        return $this->last_online;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Openvpn
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
