<?php
namespace App\Form;

use App\Entity\OrderTypes;
use App\Entity\Produits;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("nomProduit",TextType::class,[
                    'label' => 'Nom du produits'
                ])
                ->add('Abbreviation',TextType::class,[
                    'label' => 'Abbreviation'
                ])
                ->add('types', EntityType::class,[
                    'class' => OrderTypes::class,
                    'label' => 'Type d\'ordre '  
                ])
                ->add('submit' ,SubmitType::class,[
                    'label' => 'Creer un produit',
                    'validate' => true
                ]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
     return $resolver->setDefaults([
        'data_class' => Produits::class
     ]);   
    }
}