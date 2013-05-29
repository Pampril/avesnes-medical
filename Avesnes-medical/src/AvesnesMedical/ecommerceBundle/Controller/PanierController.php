<?php

namespace AvesnesMedical\ecommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
//declaration du chemin de la classe Produit
use AvesnesMedical\ecommerceBundle\Entity\Produit;



class PanierController extends Controller
{

    public function indexAction()
    {
        if(isset($_SESSION['panier']))
        {
            $panier = $_SESSION['panier'];
        }

        return $this->render('AvesnesMedicalecommerceBundle:Panier:index.html.twig');
    }

    public function ajouterAction($id)
    {
        // On récupère le repository
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('AvesnesMedicalecommerceBundle:Produit');

        // On récupère l'entité correspondant à l'id $id
        $produit = $repository->find($id);

        $nom = $produit->getNom();
        $prix = $produit->getPrix();

        $session = $this->getRequest()->getSession();

        $quantite = 0;

        if(!$session->has('panier'))
        {
            $quantite = $quantite +1;
            $prixtotal = $prix*$quantite;

            $session->set('panier', array('nom' => $nom,'prix' => $prix,'quantite' => $quantite,'prixtotal'=>$prixtotal));

            $panier = $session->get('panier');

//          \Doctrine\Common\Util\Debug::dump($panier);

        }
        else
        {
            $panier = $session->get('panier');
            $quantite = $panier['quantite']+1;
            $nom = $panier['nom'];
            $prix = $panier['prix'];
            $prixtotal = $prix * $quantite;

//          \Doctrine\Common\Util\Debug::dump($panier);

            $session->set('panier', array('nom' => $nom,'prix' => $prix,'quantite' => $quantite,'prixtotal'=>$prixtotal));

            $panier = $session->get('panier');
        }

        return $this->render('AvesnesMedicalecommerceBundle:Panier:index.html.twig',array('panier'=>$panier));
    }

    public function supprimerAction()
    {
        //supprime un article
    }

    public function modifierAction()
    {

    }

    public function viderAction()
    {
        //vide le panier
        $session = $this->getRequest()->getSession();
        $session->remove('panier');


        return $this->render('AvesnesMedicalecommerceBundle:Panier:index.html.twig');
    }

}