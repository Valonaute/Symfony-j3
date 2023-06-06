<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class CustomersType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Lastname', null, ['label' => 'Votre Nom : ', 'attr' => ['class' => 'text-center', 'id' => 'lastname', 'name' => 'lastname']])
            ->add('Firstname', null, ['label' => 'Votre Prénom ', 'attr' => ['class' => 'text-center', 'id' => 'firstname', 'name' => 'firstname']])
            ->add('Email', null, ['label' => 'Votre Email : ', 'attr' => ['class' => 'text-center', 'id' => 'email', 'name' => 'email']])
            ->add('password', null, ['label' => 'Votre Mot de passe : ', 'attr' => ['class' => 'text-center', 'id' => 'password', 'name' => 'password']])
            ->add('Validate', SubmitType::class, ['label' => 'Valider le formulaire ', 'attr' => ['class' => 'btn btn-primary', 'id' => 'validate', 'name' => 'validate']])
            ;
    }
}