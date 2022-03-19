<?php

namespace App\Form;

use App\Entity\Panier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
// Inclure la classe EntityType
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
// Inclure les autres class Entity
use App\Entity\User;
use App\Entity\Cleat;


class PanierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', EntityType::class, [
                'class' => Cleat::class,
                'choice_label' => 'name',
                'expanded' => true,
                'multiple' => true
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'pseudo'  //pseudo correspond à la BDD
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Panier::class,
        ]);
    }
}
