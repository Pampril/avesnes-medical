<?php

namespace AvesnesMedical\ecommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//Declaration des annotations pour la validation des données
use Symfony\Component\Validator\Constraints as Assert;
//Permet de vérifier si le champ existe déjà en base
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AvesnesMedical\ecommerceBundle\Entity\ProduitRepository")
 * @UniqueEntity(fields="ean", message="Un produit existe déjà avec ce code.")
 * @UniqueEntity(fields="acl", message="Un produit existe déjà avec ce code.")
 */

class Produit
{
    /**
     * @ORM\OneToOne(targetEntity="AvesnesMedical\ecommerceBundle\Entity\Photo",cascade={"persist"})
     * @Assert\Valid()
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
     * @Assert\NotBlank(message="Le nom ne peut pas être vide")
     * @Assert\MinLength(limit=3)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="acl", type="string", length=255)
     * @Assert\MinLength(limit=7)
     * @Assert\MaxLength(limit=7)
     */
    private $acl;

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=13)
     * @Assert\NotBlank(message="Le code ean ne peut pas être vide.")
     * @Assert\MinLength(limit=13)
     * @Assert\MaxLength(limit=13)
     */
    private $ean;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     * @Assert\NotBlank()
     * @Assert\Type(type="integer")
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     * @Assert\NotBlank()
     * @Assert\Type(type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\MinLength(limit=3)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="statut", type="integer")
     *
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