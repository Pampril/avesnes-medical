<?php

namespace AvesnesMedical\ecommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//declaration du chemin de la classe Categorie
use AvesnesMedical\ecommerceBundle\Entity\Categorie;
//declaration du chemin du formulaire CategorieType
use AvesnesMedical\ecommerceBundle\Form\CategorieType;
//declaration du chemin du formulaire RechercheType
use AvesnesMedical\ecommerceBundle\Form\RechercheType;

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

        $form = $this->container->get('form.factory')->create(new RechercheType());

        return $this->render('AvesnesMedicalecommerceBundle:Index:menu.html.twig', array('categorie' => $categorie, 'form' => $form->createView() ));
    }

    public function connexionAction()
    {
        return $this->render('AvesnesMedicalecommerceBundle:Index:connexion.html.twig');
    }


}
