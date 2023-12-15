<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\OrderTypes;
use App\Entity\OrderSortie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderController extends AbstractController
{   
    #[Route('/admin/order_out/{types}/{numero}', name: 'admin_order_out')]
    public function index(ManagerRegistry $doctrine,Request $request,$types ="",$numero=""): Response
    {

       if ($request->get('button_submit')) {
        $types = $request->query->get('types_product');
        #dd($types);
        $numero = $request->query->get('num_out');
        #dd($numero);
       }

        if ($types == "" && $numero == "" ) {
            $numero = '22-00';
            $types = 1;
        }
       #dd($numero);
        
        $repository1 = $doctrine->getRepository(Produits::class);
        $order = $repository1->findByOrder($types,$numero);
        $nombre_agency =$doctrine->getRepository(Produits::class)->findAgency($numero,$types);
       # dd($order);
        $agency = $nombre_agency;
        //dd($agency);
        if (!$order) {
            $numero = 11;
            // return $this->render('noProduct.html.twig');
        }else {
            $numero = $order[0]['numero'];
        }
    
        return $this->render('admin/rapport/order_out.html.twig',[
            'dispo' => $order,
            'types' =>$types,
            'agency' => $agency,
            'numero' =>$numero,
            'agence' => $nombre_agency
        ]);
    }    

    #[Route('/bordereaux-envoi/{type}/{numero}/{bureau}', name: 'bordereau')]
    public function getSlips(ManagerRegistry $doctrine,$type, $bureau, $numero): Response
    {
        $repository1 = $doctrine->getRepository(Produits::class);
        $order  = $repository1->findByOrder($type, $numero,$bureau);
       #dd($order);
        $categorie = $order[0]['categorie'];
        if (!$order) {
            return $this->render('noProduct.html.twig');
        }
        if ($type == 1) {
            return $this->render('order/slips2.html.twig',[
                'bureau' => $bureau,
                'dispo' => $order,
                'types' => $type,
                'categorie' => $categorie
            ]);
        }
        else {
            return $this->render('order/slips.html.twig',[
                'bureau' => $bureau,
                'dispo' => $order,
                'types' => $type,
                'categorie' => $categorie
            ]);
        }
    }

    #[Route('/json/api/{types}', name: 'json2')]
    public function test(ManagerRegistry $doctrine,$types): Response
    {
        $numTyp = $doctrine->getRepository(Produits::class)->findByNumeroProduct($types);
       // dd($order);
       return new JsonResponse($numTyp);
    }
}




























