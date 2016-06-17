<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Produit
{

   /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

 /**
     * @ORM\Column(type="string", length=100)
     */
    private $imageName;


    /**
    * @ORM\Column(type="text")
    */
    private $description;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $price;
    
      /**
     * @ORM\OneToMany(targetEntity="CommandeProduit", mappedBy="produit")
     */
    private $commandeproduits;
    

 /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
     * @Assert\File(maxSize="6000000")
     * @var File
     */
    private $imageFile;

    /**
    * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Product
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Get idProduit
     *
     * @return integer
     */

    public function getIdProduit()
    {
        return $this->idProduit;
    }



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Produit
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
     * Set description
     *
     * @param string $description
     *
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Produit
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Produit
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set imageName
     *
     * @param string $imageName
     *
     * @return Produit
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
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
     * Constructor
     */
    public function __construct()
    {
        $this->commandeproduits = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commandeproduit
     *
     * @param \AppBundle\Entity\CommandeProduit $commandeproduit
     *
     * @return Produit
     */
    public function addCommandeproduit(\AppBundle\Entity\CommandeProduit $commandeproduit)
    {
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
