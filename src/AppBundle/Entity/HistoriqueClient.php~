<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriqueClient
 *
 * @ORM\Table(name="historique_client", indexes={@ORM\Index(name="FK_RELATION_1", columns={"ID_COMMANDE"})})
 * @ORM\Entity
 */
class HistoriqueClient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COMMANDE", type="integer", nullable=false)
     */
    private $idCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="AVANCE_DONNEE", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $avanceDonnee;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTANT_RESTE", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $montantReste;

    /**
     * @var string
     *
     * @ORM\Column(name="ETAT_COMMANDE", type="string", length=50, nullable=true)
     */
    private $etatCommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_LIVRAISON", type="datetime", nullable=true)
     */
    private $dateLivraison;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_TIME", type="datetime", nullable=true)
     */
    private $dateTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_HISTORIQUECLIENT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHistoriqueclient;



    /**
     * Set idCommande
     *
     * @param integer $idCommande
     *
     * @return HistoriqueClient
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
     * Set avanceDonnee
     *
     * @param string $avanceDonnee
     *
     * @return HistoriqueClient
     */
    public function setAvanceDonnee($avanceDonnee)
    {
        $this->avanceDonnee = $avanceDonnee;

        return $this;
    }

    /**
     * Get avanceDonnee
     *
     * @return string
     */
    public function getAvanceDonnee()
    {
        return $this->avanceDonnee;
    }

    /**
     * Set montantReste
     *
     * @param string $montantReste
     *
     * @return HistoriqueClient
     */
    public function setMontantReste($montantReste)
    {
        $this->montantReste = $montantReste;

        return $this;
    }

    /**
     * Get montantReste
     *
     * @return string
     */
    public function getMontantReste()
    {
        return $this->montantReste;
    }

    /**
     * Set etatCommande
     *
     * @param string $etatCommande
     *
     * @return HistoriqueClient
     */
    public function setEtatCommande($etatCommande)
    {
        $this->etatCommande = $etatCommande;

        return $this;
    }

    /**
     * Get etatCommande
     *
     * @return string
     */
    public function getEtatCommande()
    {
        return $this->etatCommande;
    }

    /**
     * Set dateLivraison
     *
     * @param \DateTime $dateLivraison
     *
     * @return HistoriqueClient
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return \DateTime
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     *
     * @return HistoriqueClient
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Get idHistoriqueclient
     *
     * @return integer
     */
    public function getIdHistoriqueclient()
    {
        return $this->idHistoriqueclient;
    }
}
