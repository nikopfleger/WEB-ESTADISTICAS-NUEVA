<?php

namespace Bundles\WebEstadisticasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Titulo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Titulo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="titu_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="titu_detalle", type="string", length=255)
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
     * @return Titulo
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
