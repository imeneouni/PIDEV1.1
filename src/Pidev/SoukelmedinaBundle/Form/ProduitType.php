<?php

namespace Pidev\SoukelmedinaBundle\Form;

use Pidev\SoukelmedinaBundle\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rating')
            ->add('promotion')
            ->add('titre')
            ->add('prix')
            ->add('description')
            ->add('stockP')
            ->add('quantity')
            ->add('datecreation')
            ->add('prixprom')
            ->add('categorie',EntityType::class,array(
                'class'=>Categorie::class,'choice_label'=>'nomCat','multiple'=>false
            ))
            ->add('Sauvegarder', SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\SoukelmedinaBundle\Entity\Produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pidev_soukelmedinabundle_produit';
    }


}
