<?php

namespace AstuceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bac
 *
 * @ORM\Table(name="bac")
 * @ORM\Entity(repositoryClass="AstuceBundle\Repository\BacRepository")
 */
class Bac
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomBac", type="string", length=255)
     */
    private $nomBac;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomBac
     *
     * @param string $nomBac
     *
     * @return Bac
     */
    public function setNomBac($nomBac)
    {
        $this->nomBac = $nomBac;

        return $this;
    }

    /**
     * Get nomBac
     *
     * @return string
     */
    public function getNomBac()
    {
        return $this->nomBac;
    }
}

