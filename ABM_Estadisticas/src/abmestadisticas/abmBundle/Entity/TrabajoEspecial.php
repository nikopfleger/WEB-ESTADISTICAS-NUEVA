<?php

namespace abmestadisticas\abmBundle\Entity;

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
    private $tresId;

    /**
     * @var string
     *
     * @ORM\Column(name="tres_detalle", type="string", length=255)
     */
    private $tresDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="tres_link", type="string", length=255)
     */
    private $tresLink;

    /**
     * @var string
     *
     * @ORM\Column(name="tres_descarga", type="string", length=255)
     */
    private $tresDescarga;


    /**
     * Get tresId
     *
     * @return integer 
     */
    public function getTresId()
    {
        return $this->tresId;
    }
    
    /**
     * Set tresId
     *
     * @param integer $tresId
     * @return TrabajoEspecial
     *
     *
     */
    public function setTresId($tresId) {
    	$this->tresId = $tresId;
    	return $this;
    }

    /**
     * Set tresDetalle
     *
     * @param string $tresDetalle
     * @return TrabajoEspecial
     */
    public function setTresDetalle($tresDetalle)
    {
        $this->tresDetalle = $tresDetalle;

        return $this;
    }

    /**
     * Get tresDetalle
     *
     * @return string 
     */
    public function getTresDetalle()
    {
        return $this->tresDetalle;
    }

    /**
     * Set tresLink
     *
     * @param string $tresLink
     * @return TrabajoEspecial
     */
    public function setTresLink($tresLink)
    {
        $this->tresLink = $tresLink;

        return $this;
    }

    /**
     * Get tresLink
     *
     * @return string 
     */
    public function getTresLink()
    {
        return $this->tresLink;
    }

    /**
     * Set tresDescarga
     *
     * @param string $tresDescarga
     * @return TrabajoEspecial
     */
    public function setTresDescarga($tresDescarga)
    {
        $this->tresDescarga = $tresDescarga;

        return $this;
    }

    /**
     * Get tresDescarga
     *
     * @return string 
     */
    public function getTresDescarga()
    {
        return $this->tresDescarga;
    }
}
