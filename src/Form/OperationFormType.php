<?php
namespace App\Form;

use App\Entity\Types;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OperationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class,[
                    'label' => 'Nom \'operation : '  
                ])
                ->add('submit' ,SubmitType::class,[
                    'label' => 'Creer',
                    'validate' => true
                ]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
     return $resolver->setDefaults([
        'data_class' => Types::class
     ]);   
    }
}