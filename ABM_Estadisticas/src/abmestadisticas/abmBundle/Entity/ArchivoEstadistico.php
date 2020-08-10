<?php

namespace abmestadisticas\abmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivoEstadistico
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ArchivoEstadistico
{
   /**
     * @var integer
     *
     * @ORM\Column(name="ares_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aresId;

    /**
     * @var integer
     * @ORM\OneToOne(targetEntity="Anio")
     * @ORM\JoinColumn(name="ares_anio", referencedColumnName="anio_id")
     * 
     */
    private $aresAnio;

    /**
     * @var integer
     * @ORM\OneToOne(targetEntity="Capitulo")
     * @ORM\JoinColumn(name="ares_capitulo", referencedColumnName="capi_id")
     */
    private $aresCapitulo;

    /**
     * @var integer
     * @ORM\OneToOne(targetEntity="Titulo")
     * @ORM\JoinColumn(name="ares_titulo", referencedColumnName="titu_id")
     */
    private $aresTitulo;

    /**
     * @var integer
     * @ORM\OneToOne(targetEntity="Subtitulo")
     * @ORM\JoinColumn(name="ares_subtitulo", referencedColumnName="subt_id")
     */
    private $aresSubtitulo;

    /**
     * @var string
     * @ORM\Column(name="ares_link", type="string", length=255)
     */
    private $aresLink;

    /**
     * @var string
     * @ORM\Column(name="ares_descarga", type="string", length=255)
     */
    private $aresDescarga;

    /**
     * @var string
     * @ORM\Column(name="ares_detalle", type="string", length=255)
     */
    private $aresDetalle;

    /**
     * @var string
     * @ORM\Column(name="ares_descripcion", type="string", length=900)
     */
    private $aresDescripcion;

    /**
     * @var string
     * @ORM\Column(name="ares_comentario", type="string", length=900)
     */
    private $aresComentario;

  

    /**
     * Get aresId
     *
     * @return integer 
     */
    public function getAresId()
    {
        return $this->aresId;
    }
    
    
    /**
     * Set aresId
     *
     * @param string $aresId
     * @return ArchivoEstadistico
     */
    public function setAresId($aresId)
    {
    	$this->aresId = $aresId;
    
    	return $this;
    }
    
    

    /**
     * Set aresLink
     *
     * @param string $aresLink
     * @return ArchivoEstadistico
     */
    public function setAresLink($aresLink)
    {
        $this->aresLink = $aresLink;

        return $this;
    }

    /**
     * Get aresLink
     *
     * @return string 
     */
    public function getAresLink()
    {
        return $this->aresLink;
    }

    /**
     * Set aresDescarga
     *
     * @param string $aresDescarga
     * @return ArchivoEstadistico
     */
    public function setAresDescarga($aresDescarga)
    {
        $this->aresDescarga = $aresDescarga;

        return $this;
    }

    /**
     * Get aresDescarga
     *
     * @return string 
     */
    public function getAresDescarga()
    {
        return $this->aresDescarga;
    }

    /**
     * Set aresDetalle
     *
     * @param string $aresDetalle
     * @return ArchivoEstadistico
     */
    public function setAresDetalle($aresDetalle)
    {
        $this->aresDetalle = $aresDetalle;

        return $this;
    }

    /**
     * Get aresDetalle
     *
     * @return string 
     */
    public function getAresDetalle()
    {
        return $this->aresDetalle;
    }

    /**
     * Set aresDescripcion
     *
     * @param string $aresDescripcion
     * @return ArchivoEstadistico
     */
    public function setAresDescripcion($aresDescripcion)
    {
        $this->aresDescripcion = $aresDescripcion;

        return $this;
    }

    /**
     * Get aresDescripcion
     *
     * @return string 
     */
    public function getAresDescripcion()
    {
        return $this->aresDescripcion;
    }

    /**
     * Set aresComentario
     *
     * @param string $aresComentario
     * @return ArchivoEstadistico
     */
    public function setAresComentario($aresComentario)
    {
        $this->aresComentario = $aresComentario;

        return $this;
    }

    /**
     * Get aresComentario
     *
     * @return string 
     */
    public function getAresComentario()
    {
        return $this->aresComentario;
    }

    /**
     * Set aresAnio
     *
     * @param \abmestadisticas\abmBundle\Entity\Anio $aresAnio
     * @return ArchivoEstadistico
     */
    public function setAresAnio(\abmestadisticas\abmBundle\Entity\Anio $aresAnio = null)
    {
        $this->aresAnio = $aresAnio;

        return $this;
    }

    /**
     * Get aresAnio
     *
     * @return \abmestadisticas\abmBundle\Entity\Anio 
     */
    public function getAresAnio()
    {
        return $this->aresAnio;
    }

    /**
     * Set aresCapitulo
     *
     * @param \abmestadisticas\abmBundle\Entity\Capitulo $aresCapitulo
     * @return ArchivoEstadistico
     */
    public function setAresCapitulo(\abmestadisticas\abmBundle\Entity\Capitulo $aresCapitulo = null)
    {
        $this->aresCapitulo = $aresCapitulo;

        return $this;
    }

    /**
     * Get aresCapitulo
     *
     * @return \abmestadisticas\abmBundle\Entity\Capitulo 
     */
    public function getAresCapitulo()
    {
        return $this->aresCapitulo;
    }

    /**
     * Set aresTitulo
     *
     * @param \abmestadisticas\abmBundle\Entity\Titulo $aresTitulo
     * @return ArchivoEstadistico
     */
    public function setAresTitulo(\abmestadisticas\abmBundle\Entity\Titulo $aresTitulo = null)
    {
        $this->aresTitulo = $aresTitulo;

        return $this;
    }

    /**
     * Get aresTitulo
     *
     * @return \abmestadisticas\abmBundle\Entity\Titulo 
     */
    public function getAresTitulo()
    {
        return $this->aresTitulo;
    }

    /**
     * Set aresSubtitulo
     *
     * @param \abmestadisticas\abmBundle\Entity\Subtitulo $aresSubtitulo
     * @return ArchivoEstadistico
     */
    public function setAresSubtitulo(\abmestadisticas\abmBundle\Entity\Subtitulo $aresSubtitulo = null)
    {
        $this->aresSubtitulo = $aresSubtitulo;

        return $this;
    }

    /**
     * Get aresSubtitulo
     *
     * @return \abmestadisticas\abmBundle\Entity\Subtitulo 
     */
    public function getAresSubtitulo()
    {
        return $this->aresSubtitulo;
    }
}
