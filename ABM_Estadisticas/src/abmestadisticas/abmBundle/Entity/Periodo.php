<?php

namespace abmestadisticas\abmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periodo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Periodo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="peri_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $periId;

    /**
     * @var string
     *
     * @ORM\Column(name="peri_detalle", type="string", length=255)
     */
    private $periDetalle;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getPeriId()
    {
        return $this->periId;
    }
    
    /**
     * Set id
     * 
     * @return integer
     */
    public function setPeriId($periId)
    {
    	$this->periId = $periId;
    	return $this;
    }

    /**
     * Set periDetalle
     *
     * @param string $periDetalle
     * @return Periodo
     */
    public function setPeriDetalle($periDetalle)
    {
        $this->periDetalle = $periDetalle;

        return $this;
    }

    /**
     * Get periDetalle
     *
     * @return string 
     */
    public function getPeriDetalle()
    {
        return $this->periDetalle;
    }
}
