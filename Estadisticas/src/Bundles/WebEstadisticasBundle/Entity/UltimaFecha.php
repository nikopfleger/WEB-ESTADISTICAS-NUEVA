<?php

namespace Bundles\WebEstadisticasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UltimaFecha
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UltimaFecha
{
   /**
     * @var integer
     *
     * @ORM\Column(name="ulfe_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ulfeId;


    /**
     * @var string
     *
     * @ORM\Column(name="ulfe_dia", type="string", length=200)
     */
    private $ulfeDia;


    /**
     * Set ulfeDia
     *
     * @param string $ulfeDia
     * @return UltimaFecha
     */
    public function setUlfeDia($ulfeDia)
    {
        $this->ulfeDia = $ulfeDia;

        return $this;
    }

    /**
     * Get ulfeDia
     *
     * @return string 
     */
    public function getUlfeDia()
    {
        return $this->ulfeDia;
    }
	
	
	
    /**
     * Get id
     *
     * @return integer 
     */
    public function getUlfeId()
    {
        return $this->ulfeId;
    }
}
