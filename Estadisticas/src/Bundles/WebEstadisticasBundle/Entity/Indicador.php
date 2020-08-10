<?php

namespace Bundles\WebEstadisticasBundle\Entity;

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
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="indi_capitulo", type="integer")
     */
    private $capitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="indi_detalle", type="string", length=255)
     */
    private $detalle;

    /**
     * @var string
     *
     * @ORM\Column(name="indi_link", type="string", length=255)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="indi_descarga", type="string", length=255)
     */
    private $descarga;
    
    /**
     * @var integer
     * @ORM\Column(name="indi_anio", type="integer")
     * 
     */
    private $anio;

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
     * Set capitulo
     *
     * @param integer $capitulo
     * @return Indicador
     */
    public function setCapitulo($capitulo)
    {
        $this->capitulo = $capitulo;

        return $this;
    }

    /**
     * Get capitulo
     *
     * @return integer 
     */
    public function getCapitulo()
    {
        return $this->capitulo;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     * @return Indicador
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
     * @return Indicador
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

    /**
     * Set descarga
     *
     * @param string $descarga
     * @return Indicador
     */
    public function setDescarga($descarga)
    {
        $this->descarga = $descarga;

        return $this;
    }

    /**
     * Get descarga
     *
     * @return string 
     */
    public function getDescarga()
    {
        return $this->descarga;
    }

    /**
     * Set anio
     *
     * @param integer $anio
     * @return Indicador
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
}
