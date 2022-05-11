<?php

namespace App\Form;

use App\form\EntrerType;
use App\Entity\Stock;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntrerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'label' => 'Nom du produit: ',
                'attr' => ['placeholder' =>'Ex: TP simple']
            ])
            ->add('references',TextType::class,[
                'label' => 'References: ',
                'mapped' => false,
                'attr' => ['placeholder' =>'References du categories']
            ])
            
            ->add('Type',TextType::class,[
                'label' => 'Types: ',
                'mapped' => false,
                'attr' => ['placeholder' =>'Entrée/Sotie']
            ])
            ->add('idProduit',NumberType::class,[
                'label' => 'Numero de Produits :'
            ])
            ->add('quantite',NumberType::class,[
                'label' => 'Quantité :'
            ])
            ->add('dateEntrer',DateType::class,[
                'label' => "Date d'entrée des produits :"
            ])
            ->add('arreter',DateType::class,[
                'label' => "Date d'arreter :"
            ])
            ->add('submit',SubmitType::class,[
                'label' => " Enregistrer"
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stock::class,
        ]);
    }
}
