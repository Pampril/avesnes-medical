<?php

namespace AvesnesMedical\ecommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

//declaration du chemin de la classe Produit
use AvesnesMedical\ecommerceBundle\Entity\Produit;
//declaration du chemin de la classe Photo
use AvesnesMedical\ecommerceBundle\Entity\Photo;

class PhotoController extends Controller
{
    public function uploadAction()
    {
        $photo = new Photo();
        // On crée le FormBuilder grâce à la méthode du contrôleur
        $form = $this->createForm(new PhotoType, $photo);

        if ($this->getRequest()->isMethod('POST'))
        {
            $form->bind($this->getRequest());
            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();

                $em->persist($photo);
                $em->flush();

               // $this->redirect($this->generateUrl(...));
             }
        }

        return array('form' => $form->createView());
    }
}

