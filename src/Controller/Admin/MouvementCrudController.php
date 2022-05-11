<?php

namespace App\Controller\Admin;

use App\Entity\Mouvement;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MouvementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Mouvement::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('produit','Nom de Produit :'),
            AssociationField::new('Categorie','Nom de Categorie :'),
            AssociationField::new('types',"Type d'operation :"),
            AssociationField::new('descriptions','Descriptions : '),
            AssociationField::new('Agence',"Nom de l'agence :"),
            AssociationField::new('reference','References :'),
            AssociationField::new('User','Responsable: '),
            DateField::new('dateEntrer')->setFormTypeOptions(['disabled' => 'disabled'])
                                        ->hideOnForm(),
            IntegerField::new('quantite','Quantité (avec signe - pour la sortie) :')
        ];
    }
    
}
