<?php

namespace abmestadisticas\abmBundle\Entity;

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
     *
     */
    private $juriId;

    /**
     * @var string
     *
     * @ORM\Column(name="juri_detalle", type="string", length=255)
     */
    private $juriDetalle;

    /**
     * 
     * @ORM\OneToOne(targetEntity="Capitulo")
     * @ORM\JoinColumn(name="juri_capitulo", referencedColumnName="capi_id")
     * 
     */
    private $juriCapitulo;
    
    

    /**
     * Get juriId
     *
     * @return integer 
     */
    public function getJuriId()
    {
        return $this->juriId;
    }
    
    /**
     * Set juriId
     *
     * @param string $juriId
     * @return Jurisdiccion
     */
    public function setJuriId($juriId)
    {
    	$this->juriDetalle = $juriId;
    
    	return $this;
    }

    /**
     * Set juriDetalle
     *
     * @param string $juriDetalle
     * @return Jurisdiccion
     */
    public function setJuriDetalle($juriDetalle)
    {
        $this->juriDetalle = $juriDetalle;

        return $this;
    }

    /**
     * Get juriDetalle
     *
     * @return string 
     */
    public function getJuriDetalle()
    {
        return $this->juriDetalle;
    }

    /**
     * Set juriCapitulo
     *
     * @param \abmestadisticas\abmBundle\Entity\Capitulo $juriCapitulo
     * @return Jurisdiccion
     */
    public function setJuriCapitulo(\abmestadisticas\abmBundle\Entity\Capitulo $juriCapitulo = null)
    {
        $this->juriCapitulo = $juriCapitulo;

        return $this;
    }

    /**
     * Get juriCapitulo
     *
     * @return \abmestadisticas\abmBundle\Entity\Capitulo 
     */
    public function getJuriCapitulo()
    {
        return $this->juriCapitulo;
    }
}
