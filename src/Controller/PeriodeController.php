<?php

namespace App\Controller;

use App\Entity\Categorie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PeriodeController extends AbstractController
{
    #[Route('/etat-de-stocks/{mois}', name: 'periode_mensuel')]
    public function mensuel(ManagerRegistry $doctrine, $mois=''): Response
    {
        if($mois == ''){
            return $this->redirectToRoute('etat_de_stock');
        }
        // Appel la fonction contient la requets avec les produits initial 
        $repository = $doctrine->getRepository(Categorie::class);
        $init  = $repository->findByInitMonth($mois);
        //dd($init);
        //la requets avec les produits entrées  
        $enter  = $repository->findByEnterMonth($mois);
        //dd($enter);
        //la requets avec les produits sorties  
        $out  = $repository->findByOutMonth($mois);
        //dd($out);
        //la requets avec les produits actuels  
        $current  = $repository->findByCurrentMonth($mois);
        //dd(array_merge($init,$enter,$out,$current));
        //dd($current);

        return $this->render('periode/mensuel.html.twig', [
            'courant' =>$current,
            'init' =>$init,
            'entrer' =>$enter,
            'sort' =>$out,
        ]);
    }
    #[Route('/etat-de-stock-par-année', name: 'periode_annuel')]
    public function annuel(): Response
    {

        
        return $this->render('periode/annuel.html.twig', [
            'controller_name' => 'PeriodeController',
        ]);
    }
}
