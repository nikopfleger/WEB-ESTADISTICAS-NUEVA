<?php

namespace abmestadisticas\abmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FallosDivision
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FallosDivision
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fadi_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fadiId;

    /**
     * @var string
     *
     * @ORM\Column(name="fadi_detalle", type="string", length=255)
     */
    private $fadiDetalle;


    /**
     * Get fadiId
     *
     * @return integer 
     */
    public function getFadiId()
    {
        return $this->fadiId;
    }

    /**
     * Set fadiDetalle
     *
     * @param string $fadiDetalle
     * @return FallosDivision
     */
    public function setFadiDetalle($fadiDetalle)
    {
        $this->fadiDetalle = $fadiDetalle;

        return $this;
    }

    /**
     * Get fadiDetalle
     *
     * @return string 
     */
    public function getFadiDetalle()
    {
        return $this->fadiDetalle;
    }
}
