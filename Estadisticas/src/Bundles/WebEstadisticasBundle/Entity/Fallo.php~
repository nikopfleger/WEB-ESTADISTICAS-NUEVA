<?php

namespace Bundles\WebEstadisticasBundle\Entity;

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
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="fall_anio", type="integer")
     */
    private $anio;

    /**
     * @var integer
     *
     * @ORM\Column(name="fall_division", type="integer")
     */
    private $division;

    /**
     * @var string
     *
     * @ORM\Column(name="fall_detalle", type="string", length=255)
     */
    private $detalle;

    /**
     * @var string
     *
     * @ORM\Column(name="fall_link", type="string", length=255)
     */
    private $link;


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
     * Set anio
     *
     * @param integer $anio
     * @return Fallo
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return integer 
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set division
     *
     * @param integer $division
     * @return Fallo
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return integer 
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     * @return Fallo
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Fallo
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }
}
