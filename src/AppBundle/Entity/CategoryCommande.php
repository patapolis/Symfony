<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * 
 */
class CategoryCommande
{

public static function categoryByname($catnam)
{
    $instance = new self();
    $instance->name=$catnam;
    return $instance;
}

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
    * @ORM\Column(type="string",length=255)
    */
     private $name;



     /**
     * @ORM\OneToMany(targetEntity="Commande", mappedBy="category")
     */
    private $commandes;


    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }


   

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
     * Set name
     *
     * @param string $name
     *
     * @return CategoryCommande
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add commande
     *
     * @param \AppBundle\Entity\Commande $commande
     *
     * @return CategoryCommande
     */
    public function addCommande(\AppBundle\Entity\Commande $commande)
    {
        $this->commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \AppBundle\Entity\Commande $commande
     */
    public function removeCommande(\AppBundle\Entity\Commande $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }
}
