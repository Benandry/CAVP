<?php

namespace App\Controller;

use App\Entity\Produits;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderController extends AbstractController
{   
    #[Route('/ordre-de-sortie', name: 'order_out')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository1 = $doctrine->getRepository(Produits::class);
        $order  = $repository1->findByOrder();
       // dd($order);
        if (!$order) {
            throw $this->createNotFoundException(
                'No product found '
            );
        }


        return $this->render('order/ordre.html.twig',[
            'dispo' => $order
        ]);
    }
   
}




























