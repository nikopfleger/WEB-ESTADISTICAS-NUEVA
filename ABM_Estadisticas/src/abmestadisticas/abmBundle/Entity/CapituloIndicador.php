<?php

namespace abmestadisticas\abmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CapituloIndicador
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CapituloIndicador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cain_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cainId;

    /**
     * @var string
     *
     * @ORM\Column(name="cain_detalle", type="string", length=255)
     */
    private $cainDetalle;


    /**
     * Get cainId
     *
     * @return integer 
     */
    public function getCainId()
    {
        return $this->cainId;
    }
    
    /**
     * Set cainId
     *
     * @param integer $cainId
     * @return CapituloIndicador
     */
    public function setCainId($cainId)
    {
    	$this->cainId = $cainId;
    
    	return $this;
    }

    /**
     * Set cainDetalle
     *
     * @param string $cainDetalle
     * @return CapituloIndicador
     */
    public function setCainDetalle($cainDetalle)
    {
        $this->cainDetalle = $cainDetalle;

        return $this;
    }

    /**
     * Get cainDetalle
     *
     * @return string 
     */
    public function getCainDetalle()
    {
        return $this->cainDetalle;
    }
}
