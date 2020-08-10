<?php

namespace Bundles\WebEstadisticasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jurisdiccion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Jurisdiccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="juri_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="juri_detalle", type="string", length=255)
     */
    private $detalle;
    
  

    /**
     *
     * @var integer
     * @ORM\Column(name="juri_zoom", type="integer")
     */
    private $zoom;
    
    /**
     * 
     * @var string
     * @ORM\Column(name="juri_latitud", type="decimal")
     */
    private $latitud;
    
    /**
     *
     * @var string
     * @ORM\Column(name="juri_longitud", type="decimal")
     */
    private $longitud;

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
     * Set detalle
     *
     * @param string $detalle
     * @return Jurisdiccion
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
     * Set zoom
     *
     * @param integer $zoom
     * @return Jurisdiccion
     */
    public function setZoom($zoom)
    {
        $this->zoom = $zoom;

        return $this;
    }

    /**
     * Get zoom
     *
     * @return integer 
     */
    public function getZoom()
    {
        return $this->zoom;
    }

    /**
     * Set latitud
     *
     * @param string $latitud
     * @return Jurisdiccion
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return string 
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param string $longitud
     * @return Jurisdiccion
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return string 
     */
    public function getLongitud()
    {
        return $this->longitud;
    }
}
