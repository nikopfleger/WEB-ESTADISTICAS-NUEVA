<?php

namespace abmestadisticas\abmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Novedades
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Novedades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nove_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $noveId;

    /**
     * @var string
     *
     * @ORM\Column(name="nove_detalle", type="string", length=255)
     */
    private $noveDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="nove_link", type="string", length=255)
     */
    private $noveLink;

    /**
     * @var string
     *
     * @ORM\Column(name="nove_descarga", type="string", length=255)
     */
    private $noveDescarga;


    /**
     * Get noveId
     *
     * @return integer 
     */
    public function getNoveId()
    {
        return $this->noveId;
    }

    /**
     * Set noveId
     *
     * @param integer $noveId
     * @return Novedades
     * 
     * 
     */
    public function setNoveId($noveId) {
    	$this->noveId = $noveId;
    	return $this;
    }
    
    /**
     * Set noveDetalle
     *
     * @param string $noveDetalle
     * @return Novedades
     */
    public function setNoveDetalle($noveDetalle)
    {
        $this->noveDetalle = $noveDetalle;

        return $this;
    }

    /**
     * Get noveDetalle
     *
     * @return string 
     */
    public function getNoveDetalle()
    {
        return $this->noveDetalle;
    }

    /**
     * Set noveLink
     *
     * @param string $noveLink
     * @return Novedades
     */
    public function setNoveLink($noveLink)
    {
        $this->noveLink = $noveLink;

        return $this;
    }

    /**
     * Get noveLink
     *
     * @return string 
     */
    public function getNoveLink()
    {
        return $this->noveLink;
    }

    /**
     * Set noveDescarga
     *
     * @param string $noveDescarga
     * @return Novedades
     */
    public function setNoveDescarga($noveDescarga)
    {
        $this->noveDescarga = $noveDescarga;

        return $this;
    }

    /**
     * Get noveDescarga
     *
     * @return string 
     */
    public function getNoveDescarga()
    {
        return $this->noveDescarga;
    }
}
