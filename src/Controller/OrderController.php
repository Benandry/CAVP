<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\OrderTypes;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderController extends AbstractController
{   
    #[Route('/ordre-de-sortie', name: 'order_out')]
    public function index(ManagerRegistry $doctrine,Request $request): Response
    {
        $types = 1;
        $repository1 = $doctrine->getRepository(Produits::class);
        $order = $repository1->findByOrder();
        $agency = $repository1->findAgency();
        //dd($order[0]);


        if (!$order) {
            throw $this->createNotFoundException(
                'Pas de produits trouvées '
            );
        }
        
        $form = $this->createFormBuilder()
        ->add('select', EntityType::class,[
            'class' => OrderTypes::class])
        ->add('submit', SubmitType::class)
        ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();
            $types = $data['select']->getId();
            $order = $doctrine->getRepository(Produits::class)->findByOrder();
           // dd($order,$types);
            return $this->render('order/ordre.html.twig',[
                'dispo' => $order,
                'form' =>$form->createView(),
                'types' =>$types
            ]);
        }
    
        return $this->render('order/ordre.html.twig',[
            'dispo' => $order,
            'form' =>$form->createView(),
            'types' =>$types,
            'agency' => $agency[0]['nombre_agence']
        ]);
    }

    #[Route('/bordereaux-envoi', name: 'bordereau')]
    public function getSlips(ManagerRegistry $doctrine): Response
    {
        $repository1 = $doctrine->getRepository(Produits::class);
        $order  = $repository1->findByOrder();
       // dd($order);
        if (!$order) {
            throw $this->createNotFoundException(
                'No product found '
            );
        }
        
        return $this->render('order/slips.html.twig',[
            'dispo' => $order
        ]);
    }
   
}




























