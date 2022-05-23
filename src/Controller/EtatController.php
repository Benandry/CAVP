<?php

namespace App\Controller;

use App\Traitement\Traitement;
use App\Entity\Produits;
use App\Entity\Categorie;
use App\Repository\ProduitsRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EtatController extends AbstractController
{
  #[Route('/etat-de-stocks/{mois}', name: 'etat_de_stock')]
  public function index(ManagerRegistry $doctrine,Traitement $traitement,Request $request, $mois=''): Response
  {
    
    $val = $mois;
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
      $init = $trtmt['initial'];
      //$entrer = $trtmt['entree'];
      //$sortie = $trtmt['out'];
      $sortie = $out;
      //$beginCurrent = $trtmt['beginCurrent'];
      //dd($beginCurrent);
//dd($val)
        return $this->render('periode/mensuel.html.twig', [
            'courant' =>$current,
            'init' =>$init,
            'entrer' =>$entrer,
            'sort' =>$sortie,
            'mois' =>$mois,
            'val' =>$val,
            'annee' =>$annee,
            'initMonth' =>$initMonth,
            'beginCurrent' => $beginCurrent
        ]);
    }
    /*=================================Formulaire pour selectionner les produits============================ */
    $form = $this->createFormBuilder()
    ->add('select', EntityType::class,[
        'class' => Produits::class])
    ->add('submit', SubmitType::class)
    ->getForm();

    $form->handleRequest($request);

    /* ===== Si les produits sont selectionnnés. On va executer les requests ci-dessous ====== */
    if ($form->isSubmitted() && $form->isValid())
    {
      $isssubmitted = true;
      $isDate = false;
      //============= Recuperer les données obtenus dans les formulaires ===============================//
      $data = $form->getData();
      $product = ($data['select'])->getId();
      $repository = $doctrine->getRepository(Categorie::class);
      $init  = $repository->findByInitPro($product);
      $enter  = $repository->findBytEnterPro($product);
      $out  = $repository->findByOutPro($product); 
      $current  = $repository->findByCurrentPro($product);

      if (!$product) {
          throw $this->createNotFoundException(
              'No product found '
          );
      }
      
      $out = $traitement->setSize($out, $current, 'sortie');
      $entrer = $traitement->setSize($enter, $current, 'entrer');
     // dd($entrer);
      $trtmt = $traitement->index($init, $enter,$out, $current);
      $current = $trtmt['courant'];
      $initial = $trtmt['initial'];
      return $this->render('etat/etat_de_stock.html.twig', [
        'courant' =>$current,
        'initial' =>$initial,
        'entree' =>$entrer,
        'out' =>$out,
        'init' =>$init,
        'issubmitted' => $isssubmitted,
        'form' => $form->createView(),
        'isDate' => $isDate  
      ]);
    }
   $isDate = true;
    // ===================  Appel la fonction contient la requets avec les produits initiale en generale(Tous les categories par produits) ====================== //
    $repository = $doctrine->getRepository(Categorie::class);
    // =================== Quantite initiale en generale (Tous les categories par produits)========================== //
    $init  = $repository->findByInit();
    //dd($init);
    // ==================== la requets avec les produits entrées en generale (Tous les categories par produits)=================== //  
    $enter  = $repository->findByEnter();
      //dd($enter);
    // -====================== la requets avec les produits sorties en generale(Tous les categories par produits)  =========================== // 
    $out  = $repository->findByOut();
    //dd($out);
    // =========================== la requets avec les produits actuels en generale(Tous les categories par produits) =============================== //  
    $current  = $repository->findByCurrent();

    // Fomulaire de la date ================//
    $formD = $this->createFormBuilder()
    ->add('dateP', DateType::class,[
      'widget' => 'single_text',
      'label' =>"Entrer la date :"
    ])
    ->add('submit', SubmitType::class)
    ->getForm();

    $formD->handleRequest($request);
    if ($formD->isSubmitted() && $formD->isValid())
    {
      $isDate = true;
      //============= Recuperer les données obtenus dans les formulaires ===============================//
      $data = $formD->getData();
      $dateP = $data['dateP']->format('Y-m-d');
      
      $repository = $doctrine->getRepository(Categorie::class);
      $init  = $repository->findByInit($dateP);
      $enter  = $repository->findByEnter($dateP);
      $out  = $repository->findByOut($dateP);
      $current  = $repository->findByCurrent($dateP);

      $trtmt = $traitement->index($init, $enter,$out, $current);
      //dd($enter);
      $current = $trtmt['courant'];
      $initial = $trtmt['initial'];
      $out = $traitement->setSize($out, $current, 'sortie');
      $entrer = $traitement->setSize($enter, $current, 'entrer');
        
      return $this->render('etat/etat_de_stock.html.twig',[
        'courant' =>$current,
        'initial' =>$initial,
        'entree' =>$entrer,
        'formD' =>$formD->createView(),
        'out' =>$out,
        'issubmitted' => $isssubmitted,
        'form' => $form->createView(),
        'isDate' => $isDate
      ]);
    }

    $out = $traitement->setSize($out, $current, 'sortie');
    $entrer = $traitement->setSize($enter, $current, 'entrer');
    $traet = $traitement->index($init, $enter,$out, $current);
    $current = $traet['courant'];
    $initial = $traet['initial'];
    return $this->render('etat/etat_de_stock.html.twig',[
        'courant' =>$current,
        //'init' =>$init,
        'initial' =>$initial,
        //'entrer' =>$enter,
        'entree' =>$entrer,
        'formD' =>$formD->createView(),
        'out' =>$out,
        'isDate' => $isDate,
        'issubmitted' => $isssubmitted,
        'form' => $form->createView()
    ]);
  }
   
}
