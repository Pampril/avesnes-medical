<?php

namespace AvesnesMedical\ecommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
//declaration du chemin de la classe Produit
use AvesnesMedical\ecommerceBundle\Entity\Produit;
//declaration du chemin du formulaire ProduitType
use AvesnesMedical\ecommerceBundle\Form\ProduitType;
//declaration du chemin de la classe Categorie
use AvesnesMedical\ecommerceBundle\Entity\Categorie;
//declaration du chemin du formulaire CategorieType
use AvesnesMedical\ecommerceBundle\Form\CategorieType;
//declaration du chemin du formulaire RechercheType
use AvesnesMedical\ecommerceBundle\Form\RechercheType;
//Permet de gérer les droits utilisateurs
use JMS\SecurityExtraBundle\Annotation\Secure;


class ProduitController extends Controller
{
    /**
     * @Secure(roles="ROLE_GERANT")
     */

    public function indexAction($page)
    {
        // On récupère le repository de produit
        $produit = $this->getDoctrine()
            ->getManager()
            ->getRepository('AvesnesMedicalecommerceBundle:Produit')
            ->getProduits(10, $page); // 3 articles par page

        $form = $this->container->get('form.factory')->create(new RechercheType());

        if($produit === null)
        {
            echo 'Ce produit n\'éxiste pas';
        }

        return $this->render('AvesnesMedicalecommerceBundle:Produit:index.html.twig', array('produit' => $produit, 'form' => $form->createView(), 'page'
        => $page,'nombrePage' => ceil(count($produit)/5)));
    }

    public function afficherAction($id)
    {

        // On récupère le repository de produit
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('AvesnesMedicalecommerceBundle:Produit');

        // On récupère l'entité correspondant à l'id $id
        $produit = $repository->find($id);

        if($produit === null)
        {
            echo 'Ce produit n\'éxiste pas';
        }

        //renvoi l'id passé en paramétre à la vue
        return $this->render('AvesnesMedicalecommerceBundle:Produit:afficher.html.twig', array('produit' => $produit));
    }

    /**
     * @Secure(roles="ROLE_GERANT")
     */

    public function ajouterAction()
    {
        // Création de l'entité produit
        $produit = new Produit();

        // On crée le FormBuilder grâce à la méthode du contrôleur
        $form = $this->createForm(new ProduitType, $produit);

        // On récupère la requête
        $request = $this->get('request');

        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST')
        {
            // On fait le lien Requête <-> Formulaire
            // A partir de maintenant,la variable $produit contient les valeurs entrées dans le formulaire par le visiteur
            $form->bind($request);

            //On vérifie que les valeurs rentrées sont correctes
            if($form->isValid())
            {
                // On l'enregistre notre objet $article dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($produit);
                $em->flush();
                return $this->render('AvesnesMedicalecommerceBundle:Produit:afficher.html.twig',array('produit' => $produit));

            }
        }
        //ajout d'un produit
        return $this->render('AvesnesMedicalecommerceBundle:Produit:ajouter.html.twig',array('form' => $form->createView()));
    }

    /**
     * @Secure(roles="ROLE_GERANT")
     */
    public function modifierAction($id)
    {
        // Création de l'entité
        $produit = new Produit();

        // Récupération d'un article déjà existant, d'id $id.
        $produit = $this->getDoctrine()
                        ->getRepository('AvesnesMedical\ecommerceBundle\Entity\Produit')
                        ->find($id);
        // Et on construit le formBuilder avec cette instance d'article,comme précédemment
        $form = $this->createForm(new ProduitType, $produit);

        // On récupère la requête
        $request = $this->get('request');

        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST')
        {
            // On fait le lien Requête <-> Formulaire
            // A partir de maintenant, la variable $produit contient les valeurs entrées dans le formulaire par le visiteur
            $form->bind($request);

            //On vérifie que les valeurs rentrées sont correctes
            if($form->isValid())
            {
                // On l'enregistre notre objet $article dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($produit);
                $em->flush();
                return $this->render('AvesnesMedicalecommerceBundle:Produit:afficher.html.twig',array('produit' => $produit));
            }
        }

        //modification d'un produit
        return $this->render('AvesnesMedicalecommerceBundle:Produit:modifier.html.twig',array('form' => $form->createView()));
    }

    /**
     * @Secure(roles="ROLE_GERANT")
     */
    public function supprimerAction($id)
    {
        // Création de l'entité
        $produit = new Produit();

        $produit = $this->getDoctrine()
            ->getRepository('AvesnesMedical\ecommerceBundle\Entity\Produit')
            ->find($id);

        if (!$produit)
        {
            throw $this->createNotFoundException('Produit non trouvé avec id '.$id);
        }

        // On l'enregistre notre objet $article dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        return $this->render('AvesnesMedicalecommerceBundle:Index:index.html.twig',array('produit' => $produit));
    }

    public function rechercheAction()
    {
        $produit = new Produit();

        $request = $this->container->get('request');


        if($request->getMethod() == 'POST')
        {
            $em = $this->container->get('doctrine')->getEntityManager();

            echo'rentre 1';

            $motcle = '';
            $motcle = $this->getRequest()->request->get('produitrecherche');



            echo $motcle['motcle'];

            if($motcle['motcle'] != '')
            {
                echo'rentre 2';
                $qb = $em->createQueryBuilder();

                $qb ->select('p')
                    ->from('AvesnesMedicalecommerceBundle:Produit', 'p')
                    ->where("p.nom LIKE :motcle OR p.acl LIKE :motcle OR p.ean LIKE :motcle")
                    ->orderBy('p.nom', 'ASC')
                    ->setParameter('motcle', '%'.$motcle['motcle'].'%');

                $query = $qb->getQuery();
                $produit = $query->getResult();
            }
            else
            {
                echo'rentre 3';
                $produit = $em->getRepository('AvesnesMedicalecommerceBundle:Produit')->findAll();
            }
//            \Doctrine\Common\Util\Debug::dump($produit);
            return $this->render('AvesnesMedicalecommerceBundle:Produit:recherche.html.twig',
                array('produit' => $produit));
        }
        else
        {
            echo'rentre 4';
            $page = 1;
            return $this->indexAction($page);
        }
    }
}
