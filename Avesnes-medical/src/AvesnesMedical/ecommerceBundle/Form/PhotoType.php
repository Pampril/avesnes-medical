<?php

namespace AvesnesMedical\ecommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PhotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('file')
                ->add('nom');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'AvesnesMedical\ecommerceBundle\Entity\Photo'));
    }

    public function getName()
    {
        return 'avesnesmedical_ecommercebundle_phototype';
    }
}
