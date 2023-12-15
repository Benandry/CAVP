<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Types;
use App\Entity\Agence;
use App\Entity\Produits;
use App\Entity\Categorie;
use App\Entity\Mouvement;
use App\Entity\Fournisseur;
use App\Entity\OrderSortie;
use App\Entity\Descriptions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MouvementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('produit',EntityType::class,[
                'class' => Produits::class,
                'label' => "Nom de produit :" 
            ])
            ->add('Categorie',EntityType::class,[
                'class' => Categorie::class,
                'label' => "Nom de categorie :" 
            ])
            ->add('Agence',EntityType::class,[
            'label' => "Destination/References",
            'class' => Agence::class
            ])
            ->add('descriptions',EntityType::class,[
                'class' => Descriptions::class,
                'label' => 'Description :'
            ])
            ->add('dateEntrer',DateType::class,[
                'label' => 'Date d\'operation :'
            ])
            ->add('User',EntityType::class,[
                'class' => User::class,
                'label' => "Chef de CAVP responsable :" 
            ])

            ->add('number_planche',TextType::class,[
                'label' => 'Nombre planche: '
            ])
            ->add('quantite',TextType::class,[
                'label' => 'Quantité: '
            ])
            ->add('reference',EntityType::class,[
                'class' => Fournisseur::class,
                'label' => "References :" ,
                'required' => true
            ])
            ->add('types',EntityType::class,[
                'class' => Types::class,
                'label' => "Type d'operation :" 
            ])

            ->add('number_sortie',TextType::class,[
                'label' => 'Number de sortie:',
                'required' => false
            ])
            ->add('number_out',TextType::class,[
                'label' => 'TP-PL: '
            ])
            ->add('submit',SubmitType::class,[
                'label' => "Valider",
                'validate' => true,
            ])
            ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mouvement::class,
        ]);
    }
}
