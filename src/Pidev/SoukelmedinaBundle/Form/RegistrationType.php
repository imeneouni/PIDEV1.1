<?php

namespace Pidev\SoukelmedinaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('cin')

            ->add('roles', ChoiceType::class, array(
                    'label' => 'Type',
                    'choices' => array(
                        'Administrateur' => 'ROLE_ADMIN',
                        'Client' => 'ROLE_CLIENT',
                        'Vendeur' => 'ROLE_VENDEUR',

                    ),
                    'required' => true,
                    'multiple' => true,)
            )
            ->add('sexe', ChoiceType::class, array(
                'label' => 'Sexe',
                'choices' => array(
                    'Femme' => 'femme',
                    'Homme' => 'homme'
                ),
                'required' => true,
                'multiple' => false,))
            ->add('DateDeNaissance', DateType::class)
            ;

    }
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }


}
