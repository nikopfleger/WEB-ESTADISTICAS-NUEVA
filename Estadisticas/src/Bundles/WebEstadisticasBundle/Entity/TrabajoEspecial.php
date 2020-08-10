<?php

namespace Bundles\WebEstadisticasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrabajoEspecial
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TrabajoEspecial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tres_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tres_detalle", type="string", length=255)
     */
    private $detalle;

    /**
     * @var string
     *
     * @ORM\Column(name="tres_link", type="string", length=255)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="tres_descarga", type="string", length=255)
     */
    private $descarga;
    
    private $assetLink;
    
    private $assetDescarga;
    
    public function getAssetLink() {
    	return $this->assetLink;
    }
    
    public function setAssetLink($assetLink) {
    	$this->assetLink = $assetLink;
    	return $this;
    }
    
    public function getAssetDescarga() {
    	return $this->assetDescarga;
    }
    
    public function setAssetDescarga($assetDescarga) {
    	$this->assetDescarga = $assetDescarga;
    	return $this;
    }


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
     * @return TrabajoEspecial
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
     * @return TrabajoEspecial
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
     * @return TrabajoEspecial
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
}
