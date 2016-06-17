<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="FK_EFFECTUE", columns={"ID_CLIENT"})})
 * @ORM\Entity
 */
class Commande
{

 public function __construct()
    {
        $this->commandeproduits = new ArrayCollection();
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CLIENT", type="integer", nullable=false)
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIX_CLIENT", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $prixClient;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIX_THEORIQUE", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $prixTheorique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_LIVRAISON_ESTI",type="datetime", nullable=true)
     */
    private $dateLivraisonEsti;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_COMMANDE", type="datetime", nullable=true)
     */
    private $dateCommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COMMANDE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

       /**
     * @ORM\OneToMany(targetEntity="CommandeProduit", mappedBy="commande",cascade={"persist"})
     */
    private $commandeproduits;

     /**
     * @ORM\ManyToOne(targetEntity="CategoryCommande", inversedBy="commandes")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return Commande
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return integer
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Commande
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set prixClient
     *
     * @param string $prixClient
     *
     * @return Commande
     */
    public function setPrixClient($prixClient)
    {
        $this->prixClient = $prixClient;

        return $this;
    }

    /**
     * Get prixClient
     *
     * @return string
     */
    public function getPrixClient()
    {
        return $this->prixClient;
    }

    /**
     * Set prixTheorique
     *
     * @param string $prixTheorique
     *
     * @return Commande
     */
    public function setPrixTheorique($prixTheorique)
    {
        $this->prixTheorique = $prixTheorique;

        return $this;
    }

    /**
     * Get prixTheorique
     *
     * @return string
     */
    public function getPrixTheorique()
    {
        return $this->prixTheorique;
    }

    /**
     * Set dateLivraisonEsti
     *
     * @param string $dateLivraisonEsti
     *
     * @return Commande
     */
    public function setDateLivraisonEsti($dateLivraisonEsti)
    {
        $this->dateLivraisonEsti = $dateLivraisonEsti;

        return $this;
    }

    /**
     * Get dateLivraisonEsti
     *
     * @return string
     */
    public function getDateLivraisonEsti()
    {
        return $this->dateLivraisonEsti;
    }

    /**
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Get idCommande
     *
     * @return integer
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\CategoryCommande $category
     *
     * @return Commande
     */
    public function setCategory(\AppBundle\Entity\CategoryCommande $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\CategoryCommande
     */
    public function getCategory()
    {
        return $this->category;
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
     * Add commandeproduit
     *
     * @param \AppBundle\Entity\CommandeProduit $commandeproduit
     *
     * @return Commande
     */
    public function addCommandeproduit(\AppBundle\Entity\CommandeProduit $commandeproduit)
    {
        $commandeproduit->setCommande($this);
        $this->commandeproduits[] = $commandeproduit;

        return $this;
    }

    /**
     * Remove commandeproduit
     *
     * @param \AppBundle\Entity\CommandeProduit $commandeproduit
     */
    public function removeCommandeproduit(\AppBundle\Entity\CommandeProduit $commandeproduit)
    {
        $this->commandeproduits->removeElement($commandeproduit);
    }

    /**
     * Get commandeproduits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandeproduits()
    {
        return $this->commandeproduits;
    }
}
