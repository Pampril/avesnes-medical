<?php

namespace AvesnesMedical\ecommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AvesnesMedical\ecommerceBundle\Entity\ProduitRepository")
 */
class Produit
{
    /**
     * @ORM\OneToOne(targetEntity="AvesnesMedical\ecommerceBundle\Entity\Photo",
    cascade={"persist"})
     */
    private $photo;


    /**
     * @ORM\ManyToOne(targetEntity="AvesnesMedical\ecommerceBundle\Entity\Categorie")
     * @ORM\JoinColumn(nullable=true)
     */
    public $categorie;


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="acl", type="string", length=255)
     */
    private $acl;

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=13)
     */
    private $ean;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="statut", type="integer")
     */
    private $statut;


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
     * Set nom
     *
     * @param string $nom
     * @return Produit
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set acl
     *
     * @param string $acl
     * @return Produit
     */
    public function setAcl($acl)
    {
        $this->acl = $acl;
    
        return $this;
    }

    /**
     * Get acl
     *
     * @return string 
     */
    public function getAcl()
    {
        return $this->acl;
    }

    /**
     * Set ean
     *
     * @param string $ean
     * @return Produit
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    
        return $this;
    }

    /**
     * Get ean
     *
     * @return string 
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Produit
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set description
     *
     * @param string $description
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
     * Set statut
     *
     * @param integer $statut
     * @return Produit
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return integer 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set categorie
     *
     * @param \AvesnesMedical\ecommerceBundle\Entity\Categorie $categorie
     * @return Produit
     */
    public function setCategorie(\AvesnesMedical\ecommerceBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return \AvesnesMedical\ecommerceBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set photo
     *
     * @param \AvesnesMedical\ecommerceBundle\Entity\Photo $photo
     * @return Produit
     */
    public function setPhoto(\AvesnesMedical\ecommerceBundle\Entity\Photo $photo = null)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return \AvesnesMedical\ecommerceBundle\Entity\Photo 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}