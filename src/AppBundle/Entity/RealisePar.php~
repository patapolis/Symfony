<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RealisePar
 *
 * @ORM\Table(name="realise_par", indexes={@ORM\Index(name="FK_REALISE_PAR2", columns={"ID_FOURNISSEUR"})})
 * @ORM\Entity
 */
class RealisePar
{
    /**
     * @var string
     *
     * @ORM\Column(name="ETAT", type="string", length=50, nullable=true)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATETIME", type="datetime", nullable=true)
     */
    private $datetime;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTANT_DONNE", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $montantDonne;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COMMANDE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FOURNISSEUR", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFournisseur;



    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return RealisePar
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     *
     * @return RealisePar
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set montantDonne
     *
     * @param string $montantDonne
     *
     * @return RealisePar
     */
    public function setMontantDonne($montantDonne)
    {
        $this->montantDonne = $montantDonne;

        return $this;
    }

    /**
     * Get montantDonne
     *
     * @return string
     */
    public function getMontantDonne()
    {
        return $this->montantDonne;
    }

    /**
     * Set idCommande
     *
     * @param integer $idCommande
     *
     * @return RealisePar
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;

        return $this;
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
     * Set idFournisseur
     *
     * @param integer $idFournisseur
     *
     * @return RealisePar
     */
    public function setIdFournisseur($idFournisseur)
    {
        $this->idFournisseur = $idFournisseur;

        return $this;
    }

    /**
     * Get idFournisseur
     *
     * @return integer
     */
    public function getIdFournisseur()
    {
        return $this->idFournisseur;
    }
}
