<?php

namespace Bundles\WebEstadisticasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Institucional
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Institucional
{
    /**
     * @var integer
     *
     * @ORM\Column(name="inst_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="inst_link", type="string", length=1000)
     */
    private $link;
    
  
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
     * Set link
     *
     * @param string $link
     * @return Novedades
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
 
}
