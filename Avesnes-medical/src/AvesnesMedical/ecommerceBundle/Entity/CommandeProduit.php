<?php

namespace AvesnesMedical\ecommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeProduit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AvesnesMedical\ecommerceBundle\Entity\CommandeProduitRepository")
 */
class CommandeProduit
{
    /**
     * @ORM\ManyToOne(targetEntity="AvesnesMedical\ecommerceBundle\Entity\Produit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $produit;

    /**
     * @ORM\ManyToOne(targetEntity="AvesnesMedical\ecommerceBundle\Entity\Commande")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commande;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantite", type="integer")
     */
    private $Quantite;


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
     * Set Quantite
     *
     * @param integer $quantite
     * @return CommandeProduit
     */
    public function setQuantite($quantite)
    {
        $this->Quantite = $quantite;
    
        return $this;
    }

    /**
     * Get Quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->Quantite;
    }
}
