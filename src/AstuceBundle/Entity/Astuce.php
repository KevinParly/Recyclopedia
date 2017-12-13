<?php

namespace AstuceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Astuce
 *
 * @ORM\Table(name="astuce")
 * @ORM\Entity(repositoryClass="AstuceBundle\Repository\AstuceRepository")
 */
class Astuce
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
     * @ORM\Column(name="nomAstuce", type="string", length=255)
     */
    private $nomAstuce;

    /**
     * @var string
     *
     * @ORM\Column(name="imgAstuce", type="string", length=255)
     */
    private $imgAstuce;

    /**
     * @var string
     *
     * @ORM\Column(name="sousDescription", type="string", length=255)
     */
    private $sousDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionGeneral", type="string", length=255)
     */
    private $descriptionGeneral;

    /**
    * @ORM\ManyToMany(targetEntity="AstuceBundle\Entity\Objet",cascade={"persist"})
    */
    private $objets;

    /**
    * COnstructeur
    */
    public function __construct(){
      $this->objets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
    * Add objet
    *
    * @param \AstuceBundle\Entity\Objet $objet
    *
    * return Astuce
    */
    public function addObjet(\AstuceBundle\Entity\Objet $objet){
      $this->objets[]=$objet;
      return $this;
    }

    /**
    * Remove objet
    *
    * @param \AstuceBundle\Entity\Objet $objet
    *
    * return Astuce
    */
    public function removeObjet(\AstuceBundle\Entity\Objet $objet){
      $this->objets->removeElement($objet);

      return $this;
    }

    /**
    * Get Objets
    *
    * @return \Doctrine\Common\Collections\Collection
    */
    public function getObjets(){
      return $this->objets;
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
     * Set nomAstuce
     *
     * @param string $nomAstuce
     *
     * @return Astuce
     */
    public function setNomAstuce($nomAstuce)
    {
        $this->nomAstuce = $nomAstuce;

        return $this;
    }

    /**
     * Get nomAstuce
     *
     * @return string
     */
    public function getNomAstuce()
    {
        return $this->nomAstuce;
    }

    /**
     * Set imgAstuce
     *
     * @param string $imgAstuce
     *
     * @return Astuce
     */
    public function setImgAstuce($imgAstuce)
    {
        $this->imgAstuce = $imgAstuce;

        return $this;
    }

    /**
     * Get imgAstuce
     *
     * @return string
     */
    public function getImgAstuce()
    {
        return $this->imgAstuce;
    }

    /**
     * Set sousDescription
     *
     * @param string $sousDescription
     *
     * @return Astuce
     */
    public function setSousDescription($sousDescription)
    {
        $this->sousDescription = $sousDescription;

        return $this;
    }

    /**
     * Get sousDescription
     *
     * @return string
     */
    public function getSousDescription()
    {
        return $this->sousDescription;
    }

    /**
     * Set descriptionGeneral
     *
     * @param string $descriptionGeneral
     *
     * @return Astuce
     */
    public function setDescriptionGeneral($descriptionGeneral)
    {
        $this->descriptionGeneral = $descriptionGeneral;

        return $this;
    }

    /**
     * Get descriptionGeneral
     *
     * @return string
     */
    public function getDescriptionGeneral()
    {
        return $this->descriptionGeneral;
    }
}
