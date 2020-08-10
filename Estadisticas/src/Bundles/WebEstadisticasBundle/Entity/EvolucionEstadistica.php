<?php

namespace Bundles\WebEstadisticasBundle\Entity;

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
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="eves_detalle", type="string", length=255)
     */
    private $detalle;

    /**
     * @var string
     *
     * @ORM\Column(name="eves_link", type="string", length=255)
     */
    private $link;

    /**
     * @var integer
     *
     * @ORM\Column(name="eves_periodo", type="integer")
     */
    private $periodo;
    



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
     * @return EvolucionEstadistica
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
     * @return EvolucionEstadistica
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
     * Set periodo
     *
     * @param integer $periodo
     * @return EvolucionEstadistica
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return integer 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }
}
