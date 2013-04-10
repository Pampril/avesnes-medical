<?php

namespace AvesnesMedical\ecommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AvesnesMedical\ecommerceBundle\Entity\ClientRepository")
 */
class Client
{
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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=255)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostal", type="integer")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var integer
     *
     * @ORM\Column(name="telFixe", type="integer")
     */
    private $telFixe;

    /**
     * @var integer
     *
     * @ORM\Column(name="telMobile", type="integer")
     */
    private $telMobile;

    /**
     * @var integer
     *
     * @ORM\Column(name="droits", type="integer")
     */
    private $droits;


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
     * @return Client
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
     * Set prenom
     *
     * @param string $prenom
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set rue
     *
     * @param string $rue
     * @return Client
     */
    public function setRue($rue)
    {
        $this->rue = $rue;
    
        return $this;
    }

    /**
     * Get rue
     *
     * @return string 
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Client
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     * @return Client
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    
        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set telFixe
     *
     * @param integer $telFixe
     * @return Client
     */
    public function setTelFixe($telFixe)
    {
        $this->telFixe = $telFixe;
    
        return $this;
    }

    /**
     * Get telFixe
     *
     * @return integer 
     */
    public function getTelFixe()
    {
        return $this->telFixe;
    }

    /**
     * Set telMobile
     *
     * @param integer $telMobile
     * @return Client
     */
    public function setTelMobile($telMobile)
    {
        $this->telMobile = $telMobile;
    
        return $this;
    }

    /**
     * Get telMobile
     *
     * @return integer 
     */
    public function getTelMobile()
    {
        return $this->telMobile;
    }

    /**
     * Set droits
     *
     * @param integer $droits
     * @return Client
     */
    public function setDroits($droits)
    {
        $this->droits = $droits;
    
        return $this;
    }

    /**
     * Get droits
     *
     * @return integer 
     */
    public function getDroits()
    {
        return $this->droits;
    }
}
