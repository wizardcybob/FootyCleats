<?php

namespace App\Form;

use App\Entity\Cleat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
// Inclure la classe EntityType
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
// Inclure les autres class Entity
use App\Entity\Marque;
use App\Entity\Terrain;
use App\Entity\Couleur;


class CleatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('prix')
            ->add('image1')
            ->add('image2')
            ->add('image3')
            ->add('image4')
            ->add('marque', EntityType::class, [
                'class' => Marque::class,
                'choice_label' => 'name'
            ])
            ->add('terrain', EntityType::class, [
                'class' => Terrain::class,
                'choice_label' => 'name'
            ])
            ->add('couleurs', EntityType::class, [
                'class' => Couleur::class,
                'choice_label' => 'name',
                'expanded' => true,
                'multiple' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cleat::class,
        ]);
    }
}
