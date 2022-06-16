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
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

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
                'class' => Agence::class,
                'label' => " Agences :" 
            ])
            ->add('dateEntrer',DateType::class,[
                'label' => 'Date d\'operation :'
            ])
            ->add('descriptions',EntityType::class,[
                'class' => Descriptions::class,
                'label' => 'Description :'
            ])
            ->add('User',EntityType::class,[
                'class' => User::class,
                'label' => "Chef de CAVP responsable :" 
            ])
            ->add('quantite',IntegerType::class,[
                'label' => 'Quantité: '
            ])
            ->add('reference',EntityType::class,[
                'class' => Fournisseur::class,
                'label' => "References :" 
            ])
            ->add('types',EntityType::class,[
                'class' => Types::class,
                'label' => "Type d'operation :" 
            ])
            ->add('numero_de_sortie',EntityType::class,[
                'class' => OrderSortie::class,
                'label' => 'Numero de sortie: '
            ])
            ->add('submit',SubmitType::class,[
                'label' => "Effectuer l'operation ",
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
