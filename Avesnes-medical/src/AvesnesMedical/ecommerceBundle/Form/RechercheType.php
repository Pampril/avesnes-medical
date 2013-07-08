<?php

namespace AvesnesMedical\ecommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('motcle', 'text', array('label' => 'Rechercher'));
    }

    public function getName()
    {
        return 'produitrecherche';
    }
}