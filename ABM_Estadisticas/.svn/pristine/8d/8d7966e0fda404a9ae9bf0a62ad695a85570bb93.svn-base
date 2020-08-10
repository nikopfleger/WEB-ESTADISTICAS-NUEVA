<?php

namespace abmestadisticas\abmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvolucionEstadistica
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EvolucionEstadistica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="eves_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $evesId;

    /**
     * @var string
     *
     * @ORM\Column(name="eves_detalle", type="string", length=255)
     */
    private $evesDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="eves_link", type="string", length=255)
     */
    private $evesLink;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="Periodo")
     * @ORM\JoinColumn(name="eves_periodo",referencedColumnName="peri_id")
     */
    private $evesPeriodo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getEvesId()
    {
        return $this->evesId;
    }
    
    /**
     * Set evesId
     *
     * @param string $evesDetalle
     * @return EvolucionEstadistica
     */
    public function setEvesId($evesId)
    {
    	$this->evesId = $evesId;
    
    	return $this;
    }

    /**
     * Set evesDetalle
     *
     * @param string $evesDetalle
     * @return EvolucionEstadistica
     */
    public function setEvesDetalle($evesDetalle)
    {
        $this->evesDetalle = $evesDetalle;

        return $this;
    }

    /**
     * Get evesDetalle
     *
     * @return string 
     */
    public function getEvesDetalle()
    {
        return $this->evesDetalle;
    }

    /**
     * Set evesLink
     *
     * @param string $evesLink
     * @return EvolucionEstadistica
     */
    public function setEvesLink($evesLink)
    {
        $this->evesLink = $evesLink;

        return $this;
    }

    /**
     * Get evesLink
     *
     * @return string 
     */
    public function getEvesLink()
    {
        return $this->evesLink;
    }

    /**
     * Set evesPeriodo
     *
     * @param integer $evesPeriodo
     * @return EvolucionEstadistica
     */
    public function setEvesPeriodo($evesPeriodo)
    {
        $this->evesPeriodo = $evesPeriodo;

        return $this;
    }

    /**
     * Get evesPeriodo
     *
     * @return integer 
     */
    public function getEvesPeriodo()
    {
        return $this->evesPeriodo;
    }
}
