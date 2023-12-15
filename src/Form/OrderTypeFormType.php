<?php
namespace App\Form;

use App\Entity\OrderTypes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderTypeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('type_order_short',TextType::class,[
                    'label' => 'Nom court : ',
                    'required' => true
                ])
                ->add('type_order_long',TextType::class,[
                    'label' => 'Nom long : ',
                    'required' => true
                ])
                ->add('other_type',TextType::class,[
                    'label' => 'Autre : ',
                ])
                ->add('submit',SubmitType::class,[
                    'label' => 'Créer un type',
                    'validate' => true
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        return $resolver->setDefaults([
            'data_class' => OrderTypes::class
        ]);
    }
}