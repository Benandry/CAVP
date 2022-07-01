<?php

namespace App\Controller;

use App\Entity\Types;
use App\Entity\Mouvement;
use App\Form\MouvementType;
use App\Traitement\Traitement;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
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
    public function test(ManagerRegistry $doctrine,Traitement $traitement,Request $request)
    {
        /* ************************  Request *************** */

        $mois_annee = $request->query->get('ldate');
        //dd($mois_annee);
        if ($mois_annee == null) {
            $mois_annee = date('Y-m');
        }
        $date_split = explode('-',$mois_annee);
        $month = $date_split[1];
        $year = $date_split[0];
        //dd($year);
        
        $product = $doctrine->getRepository(Types::class)->findByOne($month,$year);
        $init = $doctrine->getRepository(Types::class)->findByInit($month,$year);
        //dd($init);
        $enter = $doctrine->getRepository(Types::class)->findByEnter($month,$year);
       // dd($enter);
        $out = $doctrine->getRepository(Types::class)->findByOut($month,$year);
        //dd($out);
        $current = $doctrine->getRepository(Types::class)->findByCurrent($month,$year);
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
            'year' => $year,
            'month' =>$month,
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
     * @Route("/impression/produit_disponible/{mois}/{annee}", name="impression_produit_disponible")
     */
    
    public function disponible(ManagerRegistry $doctrine,$mois,$annee)
    {
        return $this->render('impression/rapport/recaputilation_general.html.twig',[
            'product' =>$doctrine->getRepository(Types::class)->findByOne($mois,$annee),
            'month' => $mois,
            'year' => $annee
        ]);
    }
    
    /**
    * @Route("/impression/situation/{mois}/{annee}", name="situation")
    */
    public function new(ManagerRegistry $doctrine,Traitement $traitement,$mois,$annee)
    {
        $product = $doctrine->getRepository(Types::class)->findByOne($mois,$annee);
        $init = $doctrine->getRepository(Types::class)->findByInit($mois,$annee);
        $enter = $doctrine->getRepository(Types::class)->findByEnter($mois,$annee);
        $out = $doctrine->getRepository(Types::class)->findByOut($mois,$annee);
        $current = $doctrine->getRepository(Types::class)->findByCurrent($mois,$annee);
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

        return $this->render('impression/rapport/imprSituation.html.twig',[ 
            'year' => $annee,
            'month' =>$mois,
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
}
?>