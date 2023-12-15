<?php

namespace App\Controller;

use App\Entity\Types;
use App\Entity\Commune;
use App\Entity\Mouvement;
use App\Form\MouvementType;
use App\Traitement\Traitement;
use App\Entity\Commande;
use App\Repository\CommandeRepository;
use App\Repository\MouvementRepository;
use App\Repository\SituationRepository;
use App\Repository\TypesRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{

    #[Route('/admin/rapport/recaputilation', name: 'admin_recap')]
    public function recaputilation(TypesRepository $repository,Traitement $traitement,Request $request)
    {
        /* ************************  Request *************** */
        $month = $request->query->get('mois');
        $year = $request->query->get('year');


        if ($month == null && $year == null) {
            $year = date('Y');
            $month = date('m');
        }
        
        $product = $repository->findByOne($month,$year);
        $init = $repository->findByInit($month,$year);
        $enter = $repository->findByEnter($month,$year);
        $out = $repository->findByOut($month,$year);
        $current = $repository->findByCurrent($month,$year);
        /* **************************************************************** */
        
        $out = $traitement->setSizeAll($out, $current, 'sortie');
        $quantiterOut = $out['quantite'];
        
        $entrer = $traitement->setSizeAll($enter, $current, 'entrer');
        /* *******************************Quantité et value**************************************** */
        $quantiterEntrer = $entrer['quantite'];
        $valueEnter = $entrer['valeur'];
        
        //dd($quantiterOut);
        $valueOut = $out['valeur'];

        $traet1 = $traitement->index($init, $enter,$out, $current);
        $traet2 = $traitement->indexI($init, $enter,$out, $current);
        $current = $traet1['courant'];
        $initial = $traet2['initial'];

        //dd($initial);
        return $this->render('admin/rapport/recap.html.twig',[
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
    
    public function public(MouvementRepository $repository,$product='')
    {
        $categorie = $repository->findByValeurDispo($product);
        return new JsonResponse($categorie);
    }
    
     /**
     * @Route("/impression/produit_disponible/{mois}/{annee}", name="impression_produit_disponible")
     */
    
    public function disponible(TypesRepository $repository,$mois,$annee)
    {
        return $this->render('impression/rapport/recaputilation_general.html.twig',[
            'product' =>$repository->findByOne($mois,$annee),
            'month' => $mois,
            'year' => $annee
        ]);
    }
    
    /**
    * @Route("/impression/situation/{mois}/{annee}", name="situation")
    */
    public function new(TypesRepository $repository,Traitement $traitement,$mois,$annee)
    {
        $product = $repository->findByOne($mois,$annee);
        $init = $repository->findByInit($mois,$annee);
        $enter = $repository->findByEnter($mois,$annee);
        $out = $repository->findByOut($mois,$annee);
        $current = $repository->findByCurrent($mois,$annee);
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

     /**
    * @Route("/api_description/{types}", name="description")
    */
    public function description(CommandeRepository $repository, $types)
    {
        $categorie = $repository->findByDescription($types);
        return new JsonResponse($categorie);
    }

    #[Route('/api_references', name: 'reference')]
    public function references(SituationRepository $repository)
    {
        $references = $repository->findByFournisseur();
        // dd($categorie);
        return new JsonResponse($references);
    }

    /**
    * @Route("/api_agence", name="agence")
    */
    public function agency(SituationRepository $repository)
    {
        $agence = $repository->findByAgencyApi();
        // dd($categorie);
        return new JsonResponse($agence);
    }
}