<?php

namespace AvesnesMedical\ecommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('prenom', 'text')
            ->add('rue', 'text')
            ->add('ville', 'text')
            ->add('codePostal')
            ->add('mail', 'email')
            ->add('telFixe', 'number')
            ->add('telMobile', 'number')
            ->add('droits', 'integer')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AvesnesMedical\ecommerceBundle\Entity\Client'
        ));
    }

    public function getName()
    {
        return 'avesnesmedical_ecommercebundle_clienttype';
    }
}
