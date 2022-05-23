<?php
namespace App\Controller;

use App\Traitement\Traitement;
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
    #[Route('/impression_select/{id}', name: 'impression_select')]
    public function impressionPdf(ManagerRegistry $doctrine,$id='' ,Traitement $traitement)
    {
        $test = false ;
        $repository = $doctrine->getRepository(Categorie::class);
        $init  = $repository->findByInitPro($id);
        $enter  = $repository->findBytEnterPro($id);
        $out  = $repository->findByOutPro($id); 
        $current  = $repository->findByCurrentPro($id);

        $out = $traitement->setSize($out, $current, 'sortie');
        $entrer = $traitement->setSize($enter, $current, 'entrer');
        $traet = $traitement->index($init, $enter,$out, $current);
        $current = $traet['courant'];
        $initial = $traet['initial'];

        return $this->render('impression/select.html.twig',[
                'courant' =>$current,
                'initial' =>$initial,
                'init' => $init,
                'entrer' =>$entrer,
                'sort' =>$out
            ]);
        
    }
    //Route pour les telechargement de produits entrer
    #[Route('/impression_product', name: 'impression_product')]
    public function impressionProd(ManagerRegistry $doctrine,Traitement $traitement)
    {
        $repository = $doctrine->getRepository(Categorie::class);
        $init  = $repository->findByInit(); 
        $enter  = $repository->findByEnter();
        $out  = $repository->findByOut();
        $current  = $repository->findByCurrent();

        $out = $traitement->setSize($out, $current, 'sortie');
        $entrer = $traitement->setSize($enter, $current, 'entrer');
        $traet = $traitement->index($init, $enter,$out, $current);
        $current = $traet['courant'];
        $initial = $traet['initial'];

        return $this->render('impression/etat_de_stock.html.twig',[
            'courant' =>$current,
            'initial' =>$initial,
            'init' => $init,
            'entrer' =>$entrer,
            'sort' =>$out
        ]);
    }
      //Route pour les telechargement de produits entrer
      #[Route('/impression_product_mensuel/{mois}', name: 'impression_mensuel')]
      public function impressionProdMensuel(ManagerRegistry $doctrine,Traitement $traitement, $mois = '')
      {
          $imp = true;
        if (date($mois) > date('m-Y')) {
            dd('Date inaproprié');
        }
    
        $isssubmitted = false;
        $isDate = false;
        if($mois != ''){
            $date_split = explode('-',$mois);
            $mois = $date_split[0];
            $annee = $date_split[1]; 
            $repository = $doctrine->getRepository(Categorie::class);
            $init  = $repository->findByInit();
            $initMonth  = $repository->findByInitMonth($mois,$annee);
            //==========================Maka an ilay tableau vaovao =======================//
            $tabo;
            for($i = 0; $i < count($init); $i++) {
                $tabo[$i] = 0;
            }
    
            $enter  = $repository->findByEnterMonth($mois,$annee);
            //dd($enter);
            //la requets avec les produits sorties  
            $out  = $repository->findByOutMonth($mois,$annee);
            //dd($out);
            //la requets avec les produits actuels  
            $current  = $repository->findByCurrentMonth($mois,$annee);
            //dd(array_merge($init,$enter,$out,$current));
            //dd($current);
            $beginCurrent  = $repository->findByBeginCurrentMonth($mois,$annee);
            //dd($beginCurrent);
            $out = $traitement->setSize($out, $current, 'sortie');
            $entrer = $traitement->setSize($enter, $current, 'entrer');
            $beginCurrent = $traitement->setSize($beginCurrent, $current, 'debut');
            $trtmt = $traitement->index($init, $enter,$out, $current, $beginCurrent);
            $current = $trtmt['courant'];
            $initial = $trtmt['initial'];
            //$entrer = $trtmt['entree'];
            //$sortie = $trtmt['out'];
            $sortie = $out;
            //$beginCurrent = $trtmt['beginCurrent'];
            //dd($beginCurrent);
    
            return $this->render('impression/etat_de_stock.html.twig',[
                'courant' =>$current,
                'initial' =>$initial,
                'entrer' =>$entrer,
                'sort' =>$sortie,
                'mois' =>$mois,
                'imp' =>$imp,
                'annee' =>$annee,
                'initMonth' =>$initMonth,
                'beginCurrent' => $beginCurrent
            ]);
        
        }
    }
}
































