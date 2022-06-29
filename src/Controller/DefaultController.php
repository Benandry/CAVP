<?php

namespace App\Controller;

use App\Entity\Types;
use App\Traitement\Traitement;
use App\Entity\Mouvement;
use App\Form\MouvementType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//#[IsGranted('ROLE_ADMIN')]
class DefaultController extends AbstractController
{
    /**
    * @Route("/homepage", name="homepage")
    */
    public function homepage()
    {
        return $this->render('/home/homepage.html.twig');
    }
    /**
    * @Route("/product_dispo", name="Product_dispo")
    */
    public function test(ManagerRegistry $doctrine,Traitement $traitement)
    {
        /* ************************  Request *************** */
        $product = $doctrine->getRepository(Types::class)->findByOne();
        $init = $doctrine->getRepository(Types::class)->findByInit();
        $enter = $doctrine->getRepository(Types::class)->findByEnter();
        //dd($enter);
        $out = $doctrine->getRepository(Types::class)->findByOut();
        //dd($out);
        $current = $doctrine->getRepository(Types::class)->findByCurrent();
        /* **************************************************************** */
        
        $entrer = $traitement->setSizeAll($enter, $current, 'entrer');
        /* *******************************Quantité et value**************************************** */
        $quantiterEntrer = $entrer['quantite'];
        $valueEnter = $entrer['valeur'];
        //dd($value[0][0]);
        $out = $traitement->setSizeAll($out, $current, 'sortie');
        $quantiterOut = $out['quantite'];
        $valueOut = $out['valeur'];

        $traet1 = $traitement->index($init, $enter,$out, $current);
        $traet2 = $traitement->indexI($init, $enter,$out, $current);
        $current = $traet1['courant'];
        $initial = $traet2['initial'];

        
        return $this->render('/produit_disponible.html.twig',[
            'product' => $product,
            'quantiteEntrer' => $quantiterEntrer,
            'valeurEntrer' =>$valueEnter,
            'quantiteOut' => $quantiterOut,
            'valueOut' => $valueOut,
            'courant' =>$current,
            'init' => $init,
            'initial' =>$initial,
        ]);
    }
    /**
    * @Route("/mouvement/entrer/sortie", name="mouvement")
    */
    public function new()
    {
        $mouvement = new Mouvement();
        $form = $this->createForm(MouvementType::class, $mouvement);
        return $this->render('/mouvement.html.twig',[ 'form' => $form->createView()]);
    }

     /**
     * @Route("/route/json/{product}", name="json")
     */
    
    public function public(ManagerRegistry $doctrine,$product='')
    {
        $repository = $doctrine->getRepository( Mouvement::class);
        $categorie = $repository->findByCat($product);
        // dd($categorie);
        return new JsonResponse($categorie);
    }
    
     /**
     * @Route("/impression/produit_disponible/", name="impression_produit_disponible")
     */
    
    public function disponible(ManagerRegistry $doctrine,$product='')
    {
        return $this->render('impression/impDispo.html.twig',['product' =>$doctrine->getRepository(Types::class)->findByOne()]);
    }
}
?>