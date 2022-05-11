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
  public function index(ManagerRegistry $doctrine): Response
  {
    // Appel la fonction contient la requets avec les produits initial 
    $repository = $doctrine->getRepository(Categorie::class);
    $init  = $repository->findByInit();
    //dd($init);

    //la requets avec les produits entrées  
    $enter  = $repository->findByEnter();
      //dd($enter);
    
    //la requets avec les produits sorties  
    $out  = $repository->findByOut();
    //dd($out);

    //la requets avec les produits actuels  
    $current  = $repository->findByCurrent();
    //dd(array_merge($init,$enter,$out,$current));
    //dd($current);
    return $this->render('etat/etat_de_stock.html.twig',[
        'courant' =>$current,
        'init' =>$init,
        'entrer' =>$enter,
        'sort' =>$out,
    ]);
  }
    //================================Selection des produits ==============================================
    #[Route('/select_product', name: 'select')]
    public function select(ManagerRegistry $doctrine,Request $request )
    {

        $form = $this->createFormBuilder()
            ->add('select', EntityType::class,[
                'class' => Produits::class])
            ->add('submit', SubmitType::class)
            ->getForm();

            $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();

            $product = ($data['select'])->getId();
            //dd($product);
            
            $repository = $doctrine->getRepository(Categorie::class);
            $init  = $repository->findByInitPro($product);
            //dd($init);
        
            //la requets avec les produits entrées  
            $enter  = $repository->findBytEnterPro($product);
              //dd($enter);
            
            //la requets avec les produits sorties  
            $out  = $repository->findByOutPro($product);
            //dd($out);
        
            //la requets avec les produits actuels  
            $current  = $repository->findByCurrentPro($product);
            //dd(array_merge($init,$enter,$out,$current));
            //dd($current);
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


        return $this->render('etat/produits.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
