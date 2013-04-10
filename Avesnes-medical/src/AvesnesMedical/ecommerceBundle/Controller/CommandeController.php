<?php

namespace AvesnesMedical\ecommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
//declaration du chemin de la classe Produit
use AvesnesMedical\ecommerceBundle\Entity\Produit;
//declaration du chemin de la classe Commande
use AvesnesMedical\ecommerceBundle\Entity\Commande;
//declaration du chemin de la classe Client
use AvesnesMedical\ecommerceBundle\Entity\Client;

class CommandeController extends Controller
{
    public function indexAction()
    {
        $commande = new Commande();

        return $this->render('AvesnesMedicalecommerceBundle:Commande:index.html.twig');
    }
}