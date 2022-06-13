<?php

namespace App\Controller\Admin;

use App\Entity\Produits;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProduitsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produits::class;
    }

    public function configureFilters(Filters $filters):Filters
    {
        return $filters->add('nomProduit','Produits');
    }
    public function configureCrud(Crud $crud):Crud
    {
        return $crud
                ->setEntityLabelInPlural('Produits Postaux')
                ->setEntityLabelInSingular('Produit postal')
                ->setDefaultSort(['nomProduit' => 'asc']);
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->add(Crud::PAGE_EDIT, Action::SAVE_AND_ADD_ANOTHER);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nomProduit'),
            TextField::new('Abbreviation'),
            DateField::new('dateEntrer','Date de creation :'),
            AssociationField::new('types',"type d'ordre :"),
        ];
    }
    
}
