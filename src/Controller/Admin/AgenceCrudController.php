<?php

namespace App\Controller\Admin;

use App\Entity\Agence;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AgenceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Agence::class;
    }

    public function configureFilters(Filters $filters):Filters
    {
        return $filters->add('name','Agences');
    }
    public function configureCrud(Crud $crud):Crud
    {
        return $crud
                ->setEntityLabelInPlural('Categories')
                ->setEntityLabelInSingular('Categorie')
                ->setDefaultSort(['name' => 'asc']);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            IntegerField::new('code'),
            TextField::new('classe'),
            IntegerField::new('annuaire'),
            FormField::addPanel('Remplir le formulaire pour ajouter un Agence')
                ->collapsible()
        ];
    }
    
}
