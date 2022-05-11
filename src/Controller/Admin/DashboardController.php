<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Stock;
use App\Entity\Agence;
use App\Entity\Produits;
use App\Entity\Categorie;
use App\Entity\Mouvement;
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
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
            $routeBuilder = $this->container->get(AdminUrlGenerator::class);
            $url = $routeBuilder->setController(ProduitsCrudController::class)->generateUrl();
        
            return $this->redirect($url);

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle("Centre d'Approvisionnement de Valeurs Postals");
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

        yield MenuItem::subMenu('Entrée/Sortie ', 'fas fa-bacon')->setSubItems([
            MenuItem::linkToCrud("Voir l'operation ", 'fas fa-eye',Mouvement::class),
            MenuItem::linkToCrud('Inserer un moov', 'fas fa-plus',Mouvement::class)->setAction(Crud::PAGE_NEW)
        ]);

        yield MenuItem::subMenu('Agence Paositra Malagasy ', 'fas fa-home')->setSubItems([
            MenuItem::linkToCrud("Liste Agences ", 'fas fa-eye',Agence::class),
            MenuItem::linkToCrud('Créer un agence', 'fas fa-plus',Agence::class)->setAction(Crud::PAGE_NEW)
        ]);
    
        
    }
}
