<?php

namespace Bundles\WebEstadisticasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Anio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="anio_id", type="integer")
     * @ORM\Id
     **/
    private $anioId;


    /**
     * @var integer
     *
     * @ORM\Column(name="anio_habilitado", type="integer")
     * 
     */
    protected $anioHabilitado;

    /**
     * Get anioId
     *
     * @return integer 
     */
    
    public function getAnioId()
    {
        return $this->anioId;
    }
    
    /**
     * Set anioId
     *
     * @param integer $anioId
     * @return Anio
     */
    public function setAnioId($anioId)
    {
        $this->anioId = $anioId;

        return $this;
    }
    
   

    /**
     * Set anioHabilitado
     *
     * @param integer $anioHabilitado
     * @return Anio
     */
    public function setAnioHabilitado($anioHabilitado)
    {
        $this->anioHabilitado = $anioHabilitado;

        return $this;
    }

    /**
     * Get anioHabilitado
     *
     * @return integer 
     */
    public function getAnioHabilitado()
    {
        return $this->anioHabilitado;
    }
}
