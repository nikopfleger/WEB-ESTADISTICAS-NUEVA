<?php

namespace abmestadisticas\abmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Indicador
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Indicador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="indi_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $indiId;

    /**
     * @var integer
     * 
     * @ORM\OneToOne(targetEntity="CapituloIndicador")
     * @ORM\JoinColumn(name="indi_capitulo", referencedColumnName="cain_id")
     *
     */
    private $indiCapitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="indi_detalle", type="string", length=255)
     */
    private $indiDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="indi_link", type="string", length=255)
     */
    private $indiLink;

    /**
     * @var string
     *
     * @ORM\Column(name="indi_descarga", type="string", length=255)
     */
    private $indiDescarga;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="Anio")
     * @ORM\JoinColumn(name="indi_anio",referencedColumnName="anio_id")
     */
    private $indiAnio;


    /**
     * Get indiId
     *
     * @return integer 
     */
    public function getindiId()
    {
        return $this->indiId;
    }
    
    /**
     * Set indiId
     *
     * @param integer $indiId
     * @return Indicador
     */
    public function setIndiId($indiId)
    {
    	$this->indiId = $indiId;
    
    	return $this;
    }

    /**
     * Set indiCapitulo
     *
     * @param integer $indiCapitulo
     * @return Indicador
     */
    public function setIndiCapitulo($indiCapitulo)
    {
        $this->indiCapitulo = $indiCapitulo;

        return $this;
    }

    /**
     * Get indiCapitulo
     *
     * @return integer 
     */
    public function getIndiCapitulo()
    {
        return $this->indiCapitulo;
    }

    /**
     * Set indiDetalle
     *
     * @param string $indiDetalle
     * @return Indicador
     */
    public function setIndiDetalle($indiDetalle)
    {
        $this->indiDetalle = $indiDetalle;

        return $this;
    }

    /**
     * Get indiDetalle
     *
     * @return string 
     */
    public function getIndiDetalle()
    {
        return $this->indiDetalle;
    }

    /**
     * Set indiLink
     *
     * @param string $indiLink
     * @return Indicador
     */
    public function setIndiLink($indiLink)
    {
        $this->indiLink = $indiLink;

        return $this;
    }

    /**
     * Get indiLink
     *
     * @return string 
     */
    public function getIndiLink()
    {
        return $this->indiLink;
    }

    /**
     * Set indiDescarga
     *
     * @param string $indiDescarga
     * @return Indicador
     */
    public function setIndiDescarga($indiDescarga)
    {
        $this->indiDescarga = $indiDescarga;

        return $this;
    }

    /**
     * Get indiDescarga
     *
     * @return string 
     */
    public function getIndiDescarga()
    {
        return $this->indiDescarga;
    }

    /**
     * Set indiAnio
     *
     * @param integer $indiAnio
     * @return Indicador
     */
    public function setIndiAnio($indiAnio)
    {
        $this->indiAnio = $indiAnio;

        return $this;
    }

    /**
     * Get indiAnio
     *
     * @return integer 
     */
    public function getIndiAnio()
    {
        return $this->indiAnio;
    }
}
