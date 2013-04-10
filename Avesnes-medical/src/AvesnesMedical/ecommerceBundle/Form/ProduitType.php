<?php

namespace AvesnesMedical\ecommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
//declaration du chemin de la classe Categorie
use AvesnesMedical\ecommerceBundle\Entity\Categorie;
//declaration du chemin du formulaire CategorieType
use AvesnesMedical\ecommerceBundle\Form\CategorieType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('acl','text')
            ->add('ean','text')
            ->add('quantite','text')
            ->add('prix', 'money')
            ->add('description', 'textarea')
            ->add('statut', 'choice', array('choices' => array(1 => "Disponiple", 2 => "En attente")))
            ->add('categorie', 'entity', array(
            'class'    => 'AvesnesMedicalecommerceBundle:Categorie',
            'property' => 'nom',
            'expanded' => false))
            ->add('photo', new PhotoType())

        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AvesnesMedical\ecommerceBundle\Entity\Produit'
        ));
    }

    public function getName()
    {
        return 'avesnesmedical_ecommercebundle_produittype';
    }
}
