<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Categorie;
use App\Entity\Mouvement;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MouvementController extends AbstractController
{
    //Route pour les telechargement de produits entrer
    #[Route('/download-etat-de-stock-generaliser', name: 'download_etat')]
    public function impressionPdf(ManagerRegistry $doctrine)
    {
        $repository = $doctrine->getRepository(Categorie::class);
        $init = $repository->findByInit();  
        $enter = $repository->findByEnter();
        $out = $repository->findByOut();  
        $current  = $repository->findByCurrent();

        return $this->render('impression/etat_de_stock.html.twig',[
            'courant' =>$current,
            'init' =>$init,
            'entrer' =>$enter,
            'sort' =>$out
        ]);
       

    }

   //Route pour l'impression de produits selectionner
   #[Route('/impression_product/{id}', name: 'impression_product')]
   public function impressionAero(int $id , ManagerRegistry $doctrine): Response
   {
       $repository = $doctrine->getRepository(Categorie::class);
       $init  = $repository->findInitiale($id);  
       $enter  = $repository->findEntrer($id); 
       $out  = $repository->findBySortie($id);  
       $current  = $repository->findByCourant($id);

       return $this->render('impression/select.html.twig',[
            'courant' =>$current,
            'init' =>$init,
            'entrer' =>$enter,
            'sort' =>$out
        ]);
    }
}































