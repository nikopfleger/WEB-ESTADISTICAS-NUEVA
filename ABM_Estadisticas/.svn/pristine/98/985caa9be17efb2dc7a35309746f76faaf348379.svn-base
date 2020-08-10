<?php

namespace abmestadisticas\abmBundle\Entity;

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
     */
    private $capi_id;

    /**
     * @var string
     *
     * @ORM\Column(name="capi_detalle", type="string", length=255)
     * 
     *
     */
    private $capi_detalle;

    /**
     * Get capi_id
     *
     * @return integer 
     */
    public function getCapiId()
    {
        return $this->capi_id;
    }

    /**
     * Set capi_detalle
     *
     * @param string $capiDetalle
     * @return Capitulo
     */
    public function setCapiDetalle($capiDetalle)
    {
        $this->capi_detalle = $capiDetalle;

        return $this;
    }

    /**
     * Get capi_detalle
     *
     * @return string 
     */
    public function getCapiDetalle()
    {
        return $this->capi_detalle;
    }

    /**
     * Set capi_id
     *
     * @param integer $capiId
     * @return Capitulo
     */
    public function setCapiId($capiId)
    {
        $this->capi_id = $capiId;

        return $this;
    }
}
