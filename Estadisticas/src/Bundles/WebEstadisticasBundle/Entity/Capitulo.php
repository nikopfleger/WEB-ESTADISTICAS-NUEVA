<?php

namespace Bundles\WebEstadisticasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Capitulo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Capitulo
{
   
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="capi_id", type="integer")
	 * @ORM\Id
	 * 
	 */
	private $id;
	

    /**
     * @var string
     *
     * @ORM\Column(name="capi_detalle", type="string", length=255)
     *
     */
    private $detalle;
	
	 /**
     * @var string
     *
     * @ORM\Column(name="capi_numero", type="integer")
     *
     */
	private $numero;


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
     * @return Capitulo
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
     * Set detalle
     *
     * @param string $numero
     * @return Capitulo
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }



    /**
     * Set id
     *
     * @param integer $id
     * @return Capitulo
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
