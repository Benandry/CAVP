<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Stock;
use App\Entity\Agence;
use App\Entity\Produits;
use App\Entity\Categorie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    //#[IsGranted('ROLE_ADMIN')]
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
            return $this->render('admin/dashboard.html.twig');

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle("Centre d'Approvisionnement de Valeurs Postals")
            ->disableUrlSignatures();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Accueil');
        yield MenuItem::linkToRoute('Accueil', 'fa fa-home','homepage');
        yield MenuItem::section('Espace-Admin');

        yield MenuItem::subMenu('Produits ', 'fas fa-coins')->setSubItems([
            MenuItem::linkToCrud('Voir Produits ', 'fas fa-eye',Produits::class),
            MenuItem::linkToCrud('Ajouter des produits ', 'fas fa-plus',Produits::class)->setAction(Crud::PAGE_NEW)
        ]);
        yield MenuItem::subMenu('Categories ', 'fas fa-tag')->setSubItems([
            MenuItem::linkToCrud('Voir categorie ', 'fas fa-eye',Categorie::class),
            MenuItem::linkToCrud('Ajouter des categories ', 'fas fa-plus',Categorie::class)->setAction(Crud::PAGE_NEW)
        ]);

        yield MenuItem::subMenu('Operations sur stock', 'fas fa-bacon')->setSubItems([
            MenuItem::linkToRoute('Listes d\'operations', 'fas fa-eye','mouvement_controller_crud_index'),
            MenuItem::linkToRoute('New Operations ', 'fas fa-plus','mouvement_controller_crud_new')
        ]);

        yield MenuItem::subMenu('Agence Paositra Malagasy ', 'fas fa-home')->setSubItems([
            MenuItem::linkToCrud("Liste Agences ", 'fas fa-eye',Agence::class),
            MenuItem::linkToCrud('Créer un agence', 'fas fa-plus',Agence::class)->setAction(Crud::PAGE_NEW)
        ]);
        
    }
}
