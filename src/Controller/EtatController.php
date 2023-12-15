<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\Categorie;
use App\Traitement\Traitement;
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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//#[IsGranted('ROLE_ADMIN')]
class EtatController extends AbstractController
{
  #[Route('/admin/etat-de-stocks', name: 'admin_etat_de_stock')]
  public function index(ManagerRegistry $doctrine,Traitement $traitement,Request $request, $mois=''): Response
  {
    $month = $request->query->get('mois');
    $year_only = $request->query->get('year');
    if ($month > date('m') ) {
      dd("Date non invalide !!!");
    }
    if ($year_only == null) {
      $year_only = date('Y');
    } 

    if ($month == null) {
        $month = date('m');
    }
    $year = $year_only;

    //dd($month);

    $isssubmitted = false;
    $isDate = false;
    
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

      //dd($month);
      $data = $form->getData();
      $product = ($data['select'])->getId();
      $repository = $doctrine->getRepository(Categorie::class);
      $init  = $repository->findByInitPro($product,$month,$year);
      $enter  = $repository->findBytEnterPro($product,$month,$year);
      $out  = $repository->findByOutPro($product,$month,$year); 
      $current  = $repository->findByCurrentPro($product,$month,$year);
      $total = ["initiale" => 2,"entrer" => 2 ,"sortie" => 2,"actuelle" => 100];

      
      $out = $traitement->setSize($out, $current, 'sortie');
      $entrer = $traitement->setSize($enter, $current, 'entrer');
     // dd($entrer);
      $trtmt = $traitement->index($init, $enter,$out, $current);
      $current = $trtmt['courant'];
      $initial = $trtmt['initial'];
      $total = $current[0];

      
      return $this->render('admin/rapport/state_stock.html.twig', [
        'total' => $total,
        'courant' =>$current,
        'initial' =>$initial,
        'entree' =>$entrer,
        'out' =>$out,
        'init' =>$init,
        'issubmitted' => $isssubmitted,
        'form' => $form->createView(),
        'isDate' => $isDate,
        'month' => $month,
        'year' => $year
      ]);
    }

    //dd($year);
   $isDate = true;
    // ===================  Appel la fonction contient la requets avec les produits initiale en generale(Tous les categories par produits) ====================== //
    $repository = $doctrine->getRepository(Categorie::class);
    // =================== Quantite initiale en generale (Tous les categories par produits)========================== //
    $init  = $repository->findByInit($month,$year);
    //dd($init);
    // ==================== la requets avec les produits entrées en generale (Tous les categories par produits)=================== //  
    $enter  = $repository->findByEnter($month,$year);
      //dd($enter);
    // -====================== la requets avec les produits sorties en generale(Tous les categories par produits)  =========================== // 
    $out  = $repository->findByOut($month,$year);
    //dd($out);
    // =========================== la requets avec les produits actuels en generale(Tous les categories par produits) =============================== //  
    $current  = $repository->findByCurrent($month,$year);
    

    // Fomulaire de la date ================//
    $formD = $this->createFormBuilder()
    ->add('dateP', DateType::class,[
      'widget' => 'single_text',
      'label' =>"Entrer la date :"
    ])
    ->add('preciser', SubmitType::class)
    ->getForm();

    $formD->handleRequest($request);
    if ($formD->isSubmitted() && $formD->isValid())
    {
      $isDate = true;
      //============= Recuperer les données obtenus dans les formulaires ===============================//
      $data = $formD->getData();
      $dateP = $data['dateP']->format('Y-m-d');
      
      $repository = $doctrine->getRepository(Categorie::class);
      $init  = $repository->findByInit($dateP,$month,$year);
      $enter  = $repository->findByEnter($dateP,$month,$year);
      $out  = $repository->findByOut($dateP,$month,$year);
      $current  = $repository->findByCurrent($dateP,$month,$year);
      $total = ["initiale" => 2,"entrer" => 2 ,"sortie" => 2,"actuelle" => 100];
      
      $trtmt = $traitement->index($init, $enter,$out, $current);
      //dd($enter);
      $current = $trtmt['courant'];
      $initial = $trtmt['initial'];
      $out = $traitement->setSize($out, $current, 'sortie');
      $entrer = $traitement->setSize($enter, $current, 'entrer');
      $total = $current[0];
        
      return $this->render('etat/etat_de_stock.html.twig',[
        'total' =>$total,
        'courant' =>$current,
        'initial' =>$initial,
        'entree' =>$entrer,
        'formD' =>$formD->createView(),
        'out' =>$out,
        'issubmitted' => $isssubmitted,
        'form' => $form->createView(),
        'isDate' => $isDate,
        'month' => $month,
        'year' => $year
      ]);
    }
    //dd($out);
    $out = $traitement->setSize($out, $current, 'sortie');
    $entrer = $traitement->setSize($enter, $current, 'entrer');
    $traet = $traitement->index($init, $enter,$out, $current);
    $current = $traet['courant'];
    $initial = $traet['initial'];
    $total = ["initiale" => 2,"entrer" => 2 ,"sortie" => 2,"actuelle" => 100];

    return $this->render('admin/rapport/state_stock.html.twig',[
        'courant' =>$current,
        'total' =>$total,
        'initial' =>$initial,
        'entree' =>$entrer,
        'formD' =>$formD->createView(),
        'out' =>$out,
        'isDate' => $isDate,
        'issubmitted' => $isssubmitted,
        'form' => $form->createView(),
        'month' => $month,
        'year' => $year
    ]);
  }
   
}
