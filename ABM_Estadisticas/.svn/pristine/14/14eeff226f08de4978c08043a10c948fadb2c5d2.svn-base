<?php

namespace abmestadisticas\abmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subtitulo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Subtitulo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="subt_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $subt_id;

    /**
     * @var string
     *
     * @ORM\Column(name="subt_detalle", type="string", length=255)
     */
    private $subt_detalle;
    
    /**
     *
     * @ORM\OneToOne(targetEntity="Titulo")
     * @ORM\JoinColumn(name="subt_titulo", referencedColumnName="titu_id")
     *
     *
     */
    
    private $subt_titulo;

    /**
     * @ORM\Column(name="subt_habilitado", type="integer")
     *
     */
    
    private $subt_habilitado;

    /**
     * Get subt_id
     *
     * @return integer 
     */
    public function getSubtId()
    {
        return $this->subt_id;
    }

  
    /**
     * Set subt_detalle
     *
     * @param string $subtDetalle
     * @return Subtitulo
     */
    public function setSubtDetalle($subtDetalle)
    {
        $this->subt_detalle = $subtDetalle;

        return $this;
    }

    /**
     * Get subt_detalle
     *
     * @return string 
     */
    public function getSubtDetalle()
    {
        return $this->subt_detalle;
    }
    
    /**
     * Set subt_id
     *
     * @param integer $subt_id
     * @return Subtitulo
     */
    public function setSubtId($subtId)
    {
    	$this->subt_id = $subtId;
    
    	return $this;
    }

    /**
     * Set subt_titulo
     *
     * @param \abmestadisticas\abmBundle\Entity\Titulo $subtTitulo
     * @return Subtitulo
     */
    public function setSubtTitulo(\abmestadisticas\abmBundle\Entity\Titulo $subtTitulo = null)
    {
        $this->subt_titulo = $subtTitulo;

        return $this;
    }

    /**
     * Get subt_titulo
     *
     * @return \abmestadisticas\abmBundle\Entity\Titulo 
     */
    public function getSubtTitulo()
    {
        return $this->subt_titulo;
    }

    /**
     * Set subt_habilitado
     *
     * @param integer $subtHabilitado
     * @return Subtitulo
     */
    public function setSubtHabilitado($subtHabilitado)
    {
        $this->subt_habilitado = $subtHabilitado;

        return $this;
    }

    /**
     * Get subt_habilitado
     *
     * @return integer 
     */
    public function getSubtHabilitado()
    {
        return $this->subt_habilitado;
    }
}
