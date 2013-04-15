<?php

namespace AvesnesMedical\ecommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
//declaration du chemin de la classe Categorie
use AvesnesMedical\ecommerceBundle\Entity\Categorie;
//declaration du chemin du formulaire CategorieType
use AvesnesMedical\ecommerceBundle\Form\CategorieType;
//declaration du chemin de la classe Produit
use AvesnesMedical\ecommerceBundle\Entity\Produit;

class CategorieController extends Controller
{
    public function indexAction($page)
    {
        $categorie = $this->getDoctrine()
            ->getManager()
            ->getRepository('AvesnesMedicalecommerceBundle:Categorie')
            ->getCategories(10, $page); // 10 categories par page

        if($categorie === null)
        {
            echo 'Cette categorie n\'éxiste pas';
        }

        return $this->render('AvesnesMedicalecommerceBundle:Categorie:index.html.twig', array('categorie' => $categorie, 'page'
        => $page,'nombrePage' => ceil(count($categorie)/5 )));
    }

    public function afficherAction($id)
    {
        // On récupère le repository
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('AvesnesMedicalecommerceBundle:Categorie');

        // On récupère l'entité correspondant à l'id $id
        $categorie = $repository->find($id);

        if($categorie === null)
        {
            echo 'Cette catégorie n\'éxiste pas';
        }

        //renvoi l'id passé en paramétre à la vue
        return $this->render('AvesnesMedicalecommerceBundle:Categorie:afficher.html.twig', array('categorie' => $categorie));
    }


    public function ajouterAction()
    {
        // Création de l'entité
        $categorie = new Categorie();

        // On crée le FormBuilder grâce à la méthode du contrôleur
        $form = $this->createForm(new CategorieType, $categorie);


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
                $em->persist($categorie);
                $em->flush();
                return $this->render('AvesnesMedicalecommerceBundle:Categorie:afficher.html.twig',array('categorie' => $categorie));

            }
        }

        //ajout d'une categorie
        return $this->render('AvesnesMedicalecommerceBundle:Categorie:ajouter.html.twig',array('form' => $form->createView()));
    }

    public function modifierAction($id)
    {
        // Création de l'entité
        $categorie = new Categorie();

        // Récupération d'un article déjà existant, d'id $id.
        $categorie = $this->getDoctrine()
            ->getRepository('AvesnesMedical\ecommerceBundle\Entity\Categorie')
            ->find($id);
        // Et on construit le formBuilder avec cette instance d'article,comme précédemment
        $form = $this->createForm(new CategorieType, $categorie);

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
                $em->persist($categorie);
                $em->flush();
                return $this->render('AvesnesMedicalecommerceBundle:Categorie:afficher.html.twig',array('categorie' => $categorie));

            }
        }

        //modification d'une categorie
        return $this->render('AvesnesMedicalecommerceBundle:Categorie:modifier.html.twig',array('form' => $form->createView()));
    }

    public function supprimerAction($id)
    {
        // Création de l'entité
        $categorie = new Categorie();

        $categorie = $this->getDoctrine()
            ->getRepository('AvesnesMedical\ecommerceBundle\Entity\Categorie')
            ->find($id);

        if (!$categorie) {
            throw $this->createNotFoundException('Categorie non trouvé avec id '.$id);
        }

        // On l'enregistre notre objet $article dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        return $this->render('AvesnesMedicalecommerceBundle:Index:index.html.twig',array('categorie' => $categorie));
    }

    public function produitscategorieAction($id, $page)
    {
        $categorie = new Categorie();

        $categorie = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('AvesnesMedical\ecommerceBundle\Entity\Categorie')
            ->find($id);

        $produit = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('AvesnesMedical\ecommerceBundle\Entity\Produit')
            ->getProduitsAvecCategorie($id, 10, $page);

        if($produit == null)
        {
            throw $this->createNotFoundException('Pas de produits pour cette categorie :-(');
        }

        //renvoi l'id passé en paramétre à la vue
        return $this->render('AvesnesMedicalecommerceBundle:Categorie:produitscategorie.html.twig',
            array( 'produit' => $produit, 'categorie' => $categorie, 'page'
            => $page,'nombrePage' => ceil(count($categorie)/5 )));


    }
}