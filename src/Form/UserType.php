<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("username", TextType::class, [
                "label"=> "Nom d'utilisateur",
                "required" => true
            ])
            ->add("email", EmailType::class, [
                "label"=> "Email",
                "required" => true
            ])
            /*->add("roles", ChoiceType::class, [
                "choices"=> [
                    "Utilisateur"=> "ROLE_USER",
                    "Editeur" => "ROLE_EDITOR",
                    "Admin" => "ROLE_ADMIN"
                ],
            ])*/
            ->add("password", TextType::class, [
                "label"=> "Mot de passe",
                "required" => true
            ])
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
