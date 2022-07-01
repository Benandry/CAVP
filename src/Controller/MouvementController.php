<?php
namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Categorie;
use App\Entity\Mouvement;
use App\Traitement\Traitement;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//#[IsGranted('ROLE_ADMIN')]
class MouvementController extends AbstractController
{
    //Route pour les telechargement de produits entrer
    #[Route('/impression_select/{id}/{mois}/{annee}', name: 'impression_select')]
    public function impressionPdf(ManagerRegistry $doctrine,$id='' ,Traitement $traitement,$mois,$annee)
    {
        $isSubmitted = true;
        $test = false ;
        $repository = $doctrine->getRepository(Categorie::class);
        $init  = $repository->findByInitPro($id,$mois,$annee);
        $enter  = $repository->findBytEnterPro($id,$mois,$annee);
        $out  = $repository->findByOutPro($id,$mois,$annee); 
        $current  = $repository->findByCurrentPro($id,$mois,$annee);

        $out = $traitement->setSize($out, $current, 'sortie');
        $entrer = $traitement->setSize($enter, $current, 'entrer');
        $traet = $traitement->index($init, $enter,$out, $current);
        $current = $traet['courant'];
        $initial = $traet['initial'];
        $total = $current[0];

        return $this->render('impression/etat/select_produit.html.twig',[
                'courant' =>$current,
                'initial' =>$initial,
                'init' => $init,
                'entrer' =>$entrer,
                'out' =>$out,
                'issubmitted' => $isSubmitted,
                'total' =>$total,
                'month' => $mois,
                'year' => $annee
                
            ]);
        
    }
    //Route pour les telechargement de produits entrer
    #[Route('/impression_product/{mois}/{annee}', name: 'impression_product')]
    public function impressionProd(ManagerRegistry $doctrine,Traitement $traitement,$mois,$annee)
    {

        $repository = $doctrine->getRepository(Categorie::class);
        $init  = $repository->findByInit($mois,$annee); 
        $enter  = $repository->findByEnter($mois,$annee); 
        $out  = $repository->findByOut($mois,$annee);  
        $current  = $repository->findByCurrent($mois,$annee);

        $out = $traitement->setSize($out, $current, 'sortie');
        $entrer = $traitement->setSize($enter, $current, 'entrer');
        $traet = $traitement->index($init, $enter,$out, $current);
        $current = $traet['courant'];
        $initial = $traet['initial'];
        return $this->render('impression/etat/etat_de_stock.html.twig',[
            'courant' =>$current,
            'initial' =>$initial,
            'init' => $init,
            'entrer' =>$entrer,
            'sort' =>$out,
            'month' => $mois,
            'year' => $annee
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
































