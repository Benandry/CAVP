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
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HistoriqueController extends AbstractController
{
    
    #[Route('/compte-rendu', name: 'history')]
    public function history(ManagerRegistry $doctrine): Response
    {

        $repository1 = $doctrine->getRepository(Mouvement::class);
        $histo  = $repository1->findByhistory();
       // dd($histo);
        if (!$histo) {
            throw $this->createNotFoundException(
                'No product found '
            );
        }

        return $this->render('historique/history.html.twig', [
            'history' => $histo
        ]);
    }

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

    //================================Modification de la date ==============================================
    #[Route('/modification-de-la-date', name: 'precision_date')]
    public function specify(ManagerRegistry $doctrine,Request $request )
    {

        $form = $this->createFormBuilder()
            ->add('preciser', DateType::class,[
                'label' =>"Preciser la date :",
                'widget' => 'single_text',
            ])
            ->add('submit', SubmitType::class)
            ->getForm();

            $form->handleRequest($request);
           // dd($form);

        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();
           // dd($data);
            //$obj = new DateTime('1970-04-01 00:00:00.000000');
            //$dmy = $data->format('Y-m-d');
            $dat = ($data['preciser']->format('Y-m-d'));
            $month = date("m",strtotime($dat));
            $year = date("Y",strtotime($dat));
            //dd($year);
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


        return $this->render('historique/precision.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
























