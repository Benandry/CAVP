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
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//#[IsGranted('ROLE_ADMIN')]
class OrderController extends AbstractController
{   
    #[Route('/ordre-de-sortie/{types}/{numero}', name: 'order_out')]
    public function index(ManagerRegistry $doctrine,Request $request,$types ="",$numero=""): Response
    {
        $numero = 1;
        $types = 1;
        $repository1 = $doctrine->getRepository(Produits::class);
        $order = $repository1->findByOrder($types,$numero);
        $nombre_agency =$doctrine->getRepository(Produits::class)->findAgency($numero,$types);
        $agency = $nombre_agency[0]['nombre_agence'];

        if (!$order) {
            throw $this->createNotFoundException(
                'Pas de produits trouvées '
            );
        }

          // ******************************Formulaire de numdero de sortie **************************************//
          $form = $this->createFormBuilder()
          ->add('numero', EntityType::class,[
              'class' => OrderSortie::class])
          ->add('types', EntityType::class,[
              'class' => OrderTypes::class])
          ->add('submit', SubmitType::class)
          ->getForm();
          $form->handleRequest($request);

       /***************************************************************************************************** */
        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();
            //dd($data);
            $types = $data['types']->getId();
            $numero = $data['numero']->getId();

            //dd($numero);

            $order = $doctrine->getRepository(Produits::class)->findByOrder($types,$numero);
            //dd($order);
            $nombre_agency =$doctrine->getRepository(Produits::class)->findAgency($numero,$types);
             $a = $nombre_agency[0]['nombre_agence'];
            //dd($nombre_agency);

            if (!$order) {
                throw $this->createNotFoundException("Pas de resultat trouvé");
                
            }
            return $this->render('order/ordre.html.twig',[
                'dispo' => $order,
                'form' =>$form->createView(),
                'types' =>$types,
                'agency' =>$a,
                'numero' =>$order[0]['numero']
            ]);
        }
    //********************************************************************************************************************** */
  //  $numTyp = $doctrine->getRepository(Produits::class)->findByNumeroProduct();
        //dd($numTyp);
    
        return $this->render('order/ordre.html.twig',[
            'dispo' => $order,
            'form' =>$form->createView(),
            'types' =>$types,
            'agency' => $agency,
            'numero' =>$order[0]['numero']
        ]);
    }

    #[Route('/bordereaux-envoi/{type}/{numero}/{bureau}', name: 'bordereau')]
    public function getSlips(ManagerRegistry $doctrine,$type, $bureau, $numero): Response
    {
        $repository1 = $doctrine->getRepository(Produits::class);
        $order  = $repository1->findByOrder($type, $numero,$bureau);
       // dd($order);
        $categorie = $order[0]['categorie'];
        if (!$order) {
            throw $this->createNotFoundException(
                'No product found '
            );
        }
        
        return $this->render('order/slips.html.twig',[
            'dispo' => $order,
            'types' => $type,
            'categorie' => $categorie
        ]);
    }

    #[Route('/json/api/{types}', name: 'json2')]
    public function test(ManagerRegistry $doctrine,$types): Response
    {
        $numTyp = $doctrine->getRepository(Produits::class)->findByNumeroProduct($types);
       // dd($order);
       return new JsonResponse($numTyp);
    }

   
}




























