<?php

namespace RL\SLAMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="RL\SLAMBundle\Repository\VehiculeRepository")
 */

class Vehicule
{
    /** 
     * @ORM\Id @ORM\Column(type="string") 
     */
    private $name;
    
    /** 
     * @ORM\Id @ORM\Column(type="integer") 
     */
    private $year;

    public function __construct($name, $year)
    {
        $this->name = $name;
        $this->year = $year;
    }

    public function getModelName()
    {
        return $this->name;
    }

    public function getYearOfProduction()
    {
        return $this->year;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Vehicule
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Vehicule
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }
}
