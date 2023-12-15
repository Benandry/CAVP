<?php 

namespace App\Form;

use App\Entity\Agence;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgenceFormType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("name",TextType::class,[
                        'label' => "Nom de l'agence : ",
                        'required' => true
                    ])
                ->add("code",NumberType::class,[
                        'label' => "Code agence : ",
                        'required' => true
                    ])
                ->add("classe",TextType::class,[
                        'label' => "Classe : ",
                        'required' => true
                    ])
                ->add("annuaire",NumberType::class,[
                        'label' => "Annuaire : ",
                        'required' => true
                    ])
                ->add("submit",SubmitType::class,[
                        'label' => "Créer agence",
                        'validate' => true,
                    ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Agence::class,
        ]);
    }
}