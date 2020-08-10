<?php

namespace abmestadisticas\abmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fallo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Fallo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fall_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fallId;

    /**
     * @var integer
     * @ORM\OneToOne(targetEntity="Anio")
     * @ORM\JoinColumn(name="fall_anio", referencedColumnName="anio_id")
     */
    private $fallAnio;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="FallosDivision")
     * @ORM\JoinColumn(name="fall_division",referencedColumnName="fadi_id")
     */
    private $fallDivision;

    /**
     * @var string
     *
     * @ORM\Column(name="fall_detalle", type="string", length=255)
     */
    private $fallDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="fall_link", type="string", length=255)
     */
    private $fallLink;


    /**
     * Get FallId
     *
     * @return integer 
     */
    public function getFallId()
    {
        return $this->fallId;
    }

    /**
     * Set fallAnio
     *
     * @param integer $fallAnio
     * @return Fallo
     */
    public function setFallAnio($fallAnio)
    {
        $this->fallAnio = $fallAnio;

        return $this;
    }

    /**
     * Get fallAnio
     *
     * @return integer 
     */
    public function getFallAnio()
    {
        return $this->fallAnio;
    }

    /**
     * Set fallDivision
     *
     * @param integer $fallDivision
     * @return Fallo
     */
    public function setFallDivision($fallDivision)
    {
        $this->fallDivision = $fallDivision;

        return $this;
    }

    /**
     * Get fallDivision
     *
     * @return integer 
     */
    public function getFallDivision()
    {
        return $this->fallDivision;
    }

    /**
     * Set fallDetalle
     *
     * @param string $fallDetalle
     * @return Fallo
     */
    public function setFallDetalle($fallDetalle)
    {
        $this->fallDetalle = $fallDetalle;

        return $this;
    }

    /**
     * Get fallDetalle
     *
     * @return string 
     */
    public function getFallDetalle()
    {
        return $this->fallDetalle;
    }

    /**
     * Set fallLink
     *
     * @param string $fallLink
     * @return Fallo
     */
    public function setFallLink($fallLink)
    {
        $this->fallLink = $fallLink;

        return $this;
    }

    /**
     * Get fallLink
     *
     * @return string 
     */
    public function getFallLink()
    {
        return $this->fallLink;
    }
}
