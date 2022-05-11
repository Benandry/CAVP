<?php

namespace App\Form;


use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'label' => "Nom d'utilisateur :",
                'attr' =>[
                    'placeholder' => "Saisissez votre nom"
                ]
            ])
            ->add('prenom',TextType::class,[
                'label' => "Prenom d'utilisateur :",
                'attr' =>[
                    'placeholder' => "Saisissez votre prenom"
                ]
            ])
            ->add('email',EmailType::class,[
                'label' => "Adresse email :",
                'attr' =>[
                    'placeholder' => "Saisissez votre adresse email "
                ]
            ])
            ->add('adresse',TextType::class,[
                'label' => "Adresse  :",
                'attr' =>[
                    'placeholder' => "Entrez votre adresse"
                ]
            ])
            ->add('Password', RepeatedType::class, [
                'type' => PasswordType::class,
                'required' => true,
                'constraints' => new length(30,2),
                'invalid_message' =>"Le mot de passe et la confirmation doivent etre identique",
                'first_options' => [
                    'label' => 'Mot de passe :','attr' =>[
                        "placeholder" => "Saisissez votre mot de passe"
                    ]
                ],
                'second_options' => [
                    'label' => 'Confirmation de mot de passe','attr' =>[
                        "placeholder" => "Confirmez votre mot de passe"
                    ]
                    
                ]
                
            ])

            ->add('submit',SubmitType::class,[
                'label' => "s'incrire ",
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
