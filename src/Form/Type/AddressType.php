<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class AddressType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Address1', null, ['label' => 'Votre adresse : ', 'attr' => ['class' => 'text-center', 'id' => 'address1', 'name' => 'address1']])
            ->add('Address2', null, ['label' => 'Complément de votre adresse : ', 'attr' => ['class' => 'text-center', 'id' => 'address2', 'name' => 'address2']])
            ->add('Zipcode', IntegerType::class, ['label' => 'Votre code postal : ', 'attr' => ['class' => 'text-center', 'id' => 'zipcode', 'name' => 'zipcode']])
            ->add('City', null, ['label' => 'Votre ville : ', 'attr' => ['class' => 'text-center', 'id' => 'city', 'name' => 'city']])
            ->add('Validate', SubmitType::class, ['label' => 'Valider le formulaire ', 'attr' => ['class' => 'btn btn-primary', 'id' => 'validate', 'name' => 'validate']])
            ;
    }
}