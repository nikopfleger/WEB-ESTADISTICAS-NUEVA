<?php

namespace abmestadisticas\abmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Titulo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Titulo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="titu_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $titu_id;

    /**
     * @var string
     *
     * @ORM\Column(name="titu_detalle", type="string", length=255)
     */
    private $titu_detalle;
    
    /**
     * 
     * @ORM\OneToOne(targetEntity="Capitulo")
     * @ORM\JoinColumn(name="titu_capitulo", referencedColumnName="capi_id")
     * 
     * 
     */
    
    private $titu_capitulo;
    
    /**
     * @ORM\Column(name="titu_habilitado", type="integer")
     * 
     */
    
    private $titu_habilitado;



    /**
     * Get titu_id
     *
     * @return integer 
     */
    public function getTituId()
    {
        return $this->titu_id;
    }

 
    /**
     * Set titu_detalle
     *
     * @param string $tituDetalle
     * @return Titulo
     */
    public function setTituDetalle($tituDetalle)
    {
        $this->titu_detalle = $tituDetalle;

        return $this;
    }

    /**
     * Get titu_detalle
     *
     * @return string 
     */
    public function getTituDetalle()
    {
        return $this->titu_detalle;
    }
    
    /**
     * Set titu_id
     *
     * @param integer $titu_id
     * @return Titulo
     */
    public function setTituId($tituId)
    {
    	$this->titu_id = $tituId;
    
    	return $this;
    }

    /**
     * Set titu_capitulo
     *
     * @param \abmestadisticas\abmBundle\Entity\Capitulo $tituCapitulo
     * @return Titulo
     */
    public function setTituCapitulo(\abmestadisticas\abmBundle\Entity\Capitulo $tituCapitulo = null)
    {
        $this->titu_capitulo = $tituCapitulo;

        return $this;
    }

    /**
     * Get titu_capitulo
     *
     * @return \abmestadisticas\abmBundle\Entity\Capitulo 
     */
    public function getTituCapitulo()
    {
        return $this->titu_capitulo;
    }

    /**
     * Set titu_habilitado
     *
     * @param integer $tituHabilitado
     * @return Titulo
     */
    public function setTituHabilitado($tituHabilitado)
    {
        $this->titu_habilitado = $tituHabilitado;

        return $this;
    }

    /**
     * Get titu_habilitado
     *
     * @return integer 
     */
    public function getTituHabilitado()
    {
        return $this->titu_habilitado;
    }
}
