<?php

namespace Bundles\WebEstadisticasBundle\Entity;


use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Mapping as ORM;

Type::overrideType('date', 'Doctrine\DBAL\Types\VarDateTimeType');

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
     * @ORM\Column(name="ares_anio", type="integer")
     */
    private $aresAnio;

    /**
     * @var integer
     * @ORM\Column(name="ares_capitulo", type="integer")
     */
    private $aresCapitulo;
	
	
	    /**
     * @var integer
     * @ORM\Column(name="ares_jurisdiccion", type="integer")
     */
    private $aresJurisdiccion;

    /**
     * @var integer
     * @ORM\Column(name="ares_titulo", type="integer")
     */
    private $aresTitulo;

    /**
     * @var integer
     * @ORM\Column(name="ares_subtitulo", type="integer")
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
     * @var string
     * @ORM\Column(name="ares_fecha", type="string", length=55)
     */
    private $aresFecha;
	
		 /**
     * @var date
     * @ORM\Column(name="ares_date", type="date")
     */
 
    /**
     * Set aresAnio
     *
     * @param integer $aresAnio
     * @return ArchivoEstadistico
     */
    public function setAresAnio($aresAnio)
    {
        $this->aresAnio = $aresAnio;

        return $this;
    }

    /**
     * Get aresAnio
     *
     * @return integer 
     */
    public function getAresAnio()
    {
        return $this->aresAnio;
    }

    /**
     * Set aresCapitulo
     *
     * @param integer $aresCapitulo
     * @return ArchivoEstadistico
     */
    public function setAresCapitulo($aresCapitulo)
    {
        $this->aresCapitulo = $aresCapitulo;

        return $this;
    }

    /**
     * Get aresCapitulo
     *
     * @return integer 
     */
    public function getAresCapitulo()
    {
        return $this->aresCapitulo;
    }

    /**
     * Set aresTitulo
     *
     * @param integer $aresTitulo
     * @return ArchivoEstadistico
     */
    public function setAresTitulo($aresTitulo)
    {
        $this->aresTitulo = $aresTitulo;

        return $this;
    }

    /**
     * Get aresTitulo
     *
     * @return integer 
     */
    public function getAresTitulo()
    {
        return $this->aresTitulo;
    }

    /**
     * Set aresSubtitulo
     *
     * @param integer $aresSubtitulo
     * @return ArchivoEstadistico
     */
    public function setAresSubtitulo($aresSubtitulo)
    {
        $this->aresSubtitulo = $aresSubtitulo;

        return $this;
    }

    /**
     * Get aresSubtitulo
     *
     * @return integer 
     */
    public function getAresSubtitulo()
    {
        return $this->aresSubtitulo;
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
     * Set aresJurisdiccion
     *
     * @param integer $aresJurisdiccion
     * @return ArchivoEstadistico
     */
    public function setAresJurisdiccion($aresJurisdiccion)
    {
        $this->aresJurisdiccion = $aresJurisdiccion;

        return $this;
    }

    /**
     * Get aresJurisdiccion
     *
     * @return integer 
     */
    public function getAresJurisdiccion()
    {
        return $this->aresJurisdiccion;
    }
	
	
	
	
		
	    /**
     * Set aresFecha
     *
     * @param string $aresFecha
     * @return ArchivoEstadistico
     */
    public function setAresFecha($aresFecha)
    {
        $this->aresFecha = $aresFecha;

        return $this;
    }

    /**
     * Get aresFecha
     *
     * @return string
     */
    public function getAresFecha()
    {
        return $this->aresFecha;
    }

	
	
	
	
	


    /**
     * Get aresId
     *
     * @return integer 
     */
    public function getAresId()
    {
        return $this->aresId;
    }
}
