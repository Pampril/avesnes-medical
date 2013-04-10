<?php

namespace AvesnesMedical\ecommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
//declaration du chemin de la classe Produit
use AvesnesMedical\ecommerceBundle\Entity\Produit;
//declaration du chemin de la classe Client
use AvesnesMedical\ecommerceBundle\Entity\Client;
//declaration du chemin du formulaire ClientType
use AvesnesMedical\ecommerceBundle\Form\ClientType;

class ClientController extends Controller
{

    public function indexAction()
    {
        $client = new Client();

        return $this->render('AvesnesMedicalecommerceBundle:Client:index.html.twig');

    }

    public function inscriptionAction()
    {
        $client = new Client();

        // On crée le FormBuilder grâce à la méthode du contrôleur
        $form = $this->createForm(new ClientType, $client);


        // On récupère la requête
        $request = $this->get('request');

        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST')
        {
            // On fait le lien Requête <-> Formulaire
            // A partir de maintenant, la variable $categorie contient les valeurs entrées dans le formulaire par le visiteur
            $form->bind($request);

            //On vérifie que les valeurs rentrées sont correctes
            if($form->isValid())
            {
                // On l'enregistre notre objet $article dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($client);
                $em->flush();
                return $this->render('AvesnesMedicalecommerceBundle:Index:index.html.twig');

            }
        }

        //ajout d'une categorie
        return $this->render('AvesnesMedicalecommerceBundle:Client:inscription.html.twig',array('form' => $form->createView()));

    }

}