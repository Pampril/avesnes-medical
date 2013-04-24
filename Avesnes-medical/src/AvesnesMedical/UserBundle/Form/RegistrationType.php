<?php

namespace AvesnesMedical\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('nom','text',array('label' => 'Nom'))
            ->add('prenom','text',array('label' => 'Prenom'))
            ->add('rue','text',array('label' => 'Rue'))
            ->add('ville','text',array('label' => 'Ville'))
            ->add('CodePostal','text',array('label' => 'Code postal'))
            ->add('telFixe','text',array('label' => 'Téléphone Fixe '))
            ->add('telMobile','text',array('label' => 'Téléphone Mobile'))
    ;
    }

    public function getName()
    {
        return 'avesnesmedical_inscription';
    }


}