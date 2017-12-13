<?php

namespace AstuceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objet
 *
 * @ORM\Table(name="objet")
 * @ORM\Entity(repositoryClass="AstuceBundle\Repository\ObjetRepository")
 */
class Objet
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
     * @ORM\Column(name="libeleObjet", type="string", length=255)
     */
    private $libeleObjet;

    /**
     * @var string
     *
     * @ORM\Column(name="imgProduit", type="string", length=255)
     */
    private $imgProduit;

    /**
    * @var string
    *
    * @ORM\Column(name="categorie", type="string", length=255)
    */
    private $categorie;

    /**
    * @ORM\ManyToOne(targetEntity="AstuceBundle\Entity\Bac")
    * @ORM\JoinColumn(nullable=false)
    */
    private $bac;

    /**
     * Get bac
     *
     * @return \AstuceBundle\Entity\Bac
     */
     public function getBac(){
       return $this->bac;
     }

     /**
      * Set bac
      *
      * @param \AstuceBundle\Entity\Bac $bac
      *
      * @return Objet
      */
      public function setBac(\AstuceBundle\Entity\Bac $bac){
        $this->bac = $bac;
        return $this;
      }

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
     * Set libeleObjet
     *
     * @param string $libeleObjet
     *
     * @return Objet
     */
    public function setLibeleObjet($libeleObjet)
    {
        $this->libeleObjet = $libeleObjet;

        return $this;
    }

    /**
     * Get libeleObjet
     *
     * @return string
     */
    public function getLibeleObjet()
    {
        return $this->libeleObjet;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Objet
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set imgProduit
     *
     * @param string $imgProduit
     *
     * @return Objet
     */
    public function setImgProduit($imgProduit)
    {
        $this->imgProduit = $imgProduit;

        return $this;
    }

    /**
     * Get imgProduit
     *
     * @return string
     */
    public function getImgProduit()
    {
        return $this->imgProduit;
    }
}
