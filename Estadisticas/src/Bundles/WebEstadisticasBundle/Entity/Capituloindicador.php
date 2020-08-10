<?php

namespace Bundles\WebEstadisticasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Capituloindicador
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Capituloindicador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cain_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cain_detalle", type="string", length=255)
     */
    private $detalle;


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
     * @return Capituloindicador
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
}
