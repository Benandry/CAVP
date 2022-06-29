<?php

namespace App\Controller;

use App\Form\MonthType;
use App\Entity\Mouvement;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//#[IsGranted('ROLE_ADMIN')]
class HistoriqueController extends AbstractController
{
    
    #[Route('/compte-rendu', name: 'history')]
    public function history(ManagerRegistry $doctrine,Request $request): Response
    {

        
        // =================Formulaire pour preciser la date  =================//
        $form = $this->createFormBuilder()
            ->add('preciser', DateType::class,[
                'label' =>"Preciser la date :",
                'widget' => 'single_text',
            ])
            ->add('submit', SubmitType::class)
            ->getForm();

            $form->handleRequest($request);
              // =================Si la formulaire est submit  =================//
        if ($form->isSubmitted() && $form->isValid())
        {
            //==================== Recuperer les donnés dans les formulaire ===================== //
            $data = $form->getData();
            //==================== Modifier la format de la date  ===================== //
            $dat = ($data['preciser']->format('Y-m-d'));
            //==================== Recuperer le mois de la date  ===================== //
            $month = date("m",strtotime($dat));
            //==================== Recuperer l'annés de la date  ===================== //
            $year = date("Y",strtotime($dat));

            $repository1 = $doctrine->getRepository(Mouvement::class);
            $histo  = $repository1->findByMois($month,$year);
            //dd($histo);
            if (!$histo) {
                throw $this->createNotFoundException(
                    'No product found '
                );
            }
            return $this->render('historique/categorie_avec_date.html.twig', [
                'history' => $histo,
                'ymd' =>$dat
            ]);
        }

        // =================== Compte rendu en generale ====================== //
        $repository1 = $doctrine->getRepository(Mouvement::class);
        $histo  = $repository1->findByhistory();
       // dd($histo);
        if (!$histo) {
            throw $this->createNotFoundException(
                'No product found '
            );
        }
        return $this->render('historique/history.html.twig', [
            'history' => $histo,
            'form' => $form->createView()
        ]);
    }
    // =================== Compte rendu des produits sorties ====================== //
    #[Route('/compte-rendu-sortie', name: 'history_out')]
    public function out(ManagerRegistry $doctrine): Response
    {

        $repository1 = $doctrine->getRepository(Mouvement::class);
        $histo  = $repository1->findByOut();
       // dd($histo);
        if (!$histo) {
            throw $this->createNotFoundException(
                'No product found '
            );
        }

        return $this->render('historique/history_out.html.twig', [
            'history' => $histo
        ]);
    }
    // =================== Compte rendu des produits reintegrés  ====================== //
    #[Route('/compte-rendu-produits-integrée', name: 'integreted')]
    public function integreted(ManagerRegistry $doctrine): Response
    {

        $repository1 = $doctrine->getRepository(Mouvement::class);
        $histo  = $repository1->findByIntegreted();
       // dd($histo);
        if (!$histo) {
            throw $this->createNotFoundException(
                'No product found '
            );
        }

        return $this->render('historique/history_integreted.html.twig', [
            'history' => $histo
        ]);
    }
    // =================== Compte rendu des produits Entrés ====================== //
    #[Route('/compte-rendu-entrer', name: 'history_enter')]
    public function enter(ManagerRegistry $doctrine): Response
    {

        $repository1 = $doctrine->getRepository(Mouvement::class);
        $histo  = $repository1->findByEnter();
       // dd($histo);
        if (!$histo) {
            throw $this->createNotFoundException(
                'No product found '
            );
        }

        return $this->render('historique/history_in.html.twig', [
            'history' => $histo
        ]);
    }

}
























