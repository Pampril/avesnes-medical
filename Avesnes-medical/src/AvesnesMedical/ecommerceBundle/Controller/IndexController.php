<?php

namespace AvesnesMedical\ecommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//declaration du chemin de la classe Categorie
use AvesnesMedical\ecommerceBundle\Entity\Categorie;
//declaration du chemin du formulaire CategorieType
use AvesnesMedical\ecommerceBundle\Form\CategorieType;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('AvesnesMedicalecommerceBundle:Index:index.html.twig');
    }

    public function menuAction()
    {
        $categorie = $this->getDoctrine()
            ->getManager()
            ->getRepository('AvesnesMedicalecommerceBundle:Categorie')
            ->findAll();


        return $this->render('AvesnesMedicalecommerceBundle:Index:menu.html.twig', array('categorie' => $categorie));
    }

    public function connexionAction()
    {
        return $this->render('AvesnesMedicalecommerceBundle:Index:connexion.html.twig');
    }
}
