<?php

namespace App\Form;

use App\Data\SearchData;
use App\Entity\Terrain;
use App\Entity\Marque;
use App\Entity\Couleur;
use App\Entity\Cleat;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class SearchForm extends AbstractType //symfony va savoir qu'on est en présence d'un système de formulaire
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('q', TextType::class, [
            //     'label' => false,
            //     'required' => false,
            //     'attr' => [
            //         'placeholder' => 'Rechercher un produit'
            //     ]
            // ])
            ->add('terrain', EntityType::class, [
                'label' => false,
                'required' => false,
                'class' => Terrain::class,
                'expanded' => true,
                'multiple' => true
            ])
            // ->add('couleur', EntityType::class, [
            //     'label' => false,
            //     'required' => false,
            //     'class' => Cleat::class,
            //     'expanded' => true,
            //     'multiple' => true
            // ])
            ->add('marque', EntityType::class, [
                'label' => false,
                'required' => false,
                'class' => Marque::class,
                'expanded' => true,
                'multiple' => true
            ])
            // ->add('min', NumberType::class, [
            //     'label' => false,
            //     'required' => false,
            //     'attr' => [
            //         'placeholder' => 'Prix min'
            //     ]
            // ]) 
            // ->add('max', NumberType::class, [
            //     'label' => false,
            //     'required' => false,
            //     'attr' => [
            //         'placeholder' => 'Prix max'
            //     ]
            // ]) 
            ;
    }

    public function configureOptions(OptionsResolver $resolver) 
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
            'method' => 'GET',
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return ''; //pour éviter d'avoir un tableau par défaut on retourne une chaîne de caractères
    }

}