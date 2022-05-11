<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Categorie::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('NomDeCategorie'),
            FormField::addPanel('Remplir le formulaire pour ajouter un nouveau Categorie')
                ->collapsible(),
            AssociationField::new('produit'),
            IntegerField::new('valeurFaciale'),
            TextField::new('AnneeEmission'),
            TextField::new('coteEmission'),
            IntegerField::new('ordre'),
            MoneyField::new('prixDeVente')->setCurrency("EUR"),
        ];
    }
    
}
