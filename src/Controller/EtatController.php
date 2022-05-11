<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\Categorie;
use App\Repository\ProduitsRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EtatController extends AbstractController
{
  #[Route('/etat-de-stocks', name: 'etat_de_stock')]
  public function index(ManagerRegistry $doctrine,Request $request): Response
  {
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
        //============= Recuperer les données obtenus dans les formulaires ===============================//
        $data = $form->getData();
        // =============== recuperer ID de produit selectionné ======================//
        $product = ($data['select'])->getId();
        // ============= Recuperer les fonctions dans le repositorie contient la requets ===========//
        $repository = $doctrine->getRepository(Categorie::class);
        // ========== Qantite Initiale et Ordre de par categorie ================ //
        $init  = $repository->findByInitPro($product);
        //dd($init);
    
        // ==================la requets avec les produits entrées  ====================== // 
        $enter  = $repository->findBytEnterPro($product);
          //dd($enter);
        
        // ================= la requets avec les produits sorties ==========================//  
        $out  = $repository->findByOutPro($product);
        //dd($out);
    
        // =================== la requets avec les produits actuels ======================== //  
        $current  = $repository->findByCurrentPro($product);
        //dd(array_merge($init,$enter,$out,$current));
        //Si les produits ont aucune donnés;
        if (!$product) {
            throw $this->createNotFoundException(
                'No product found '
            );
        }
        return $this->render('etat/produits_select.html.twig', [
          'courant' =>$current,
          'init' =>$init,
          'entrer' =>$enter,
          'sort' =>$out
        ]);
    }

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

    return $this->render('etat/etat_de_stock.html.twig',[
        'courant' =>$current,
        'init' =>$init,
        'entrer' =>$enter,
        'sort' =>$out,
        'form' => $form->createView()
    ]);
  }
   
}
