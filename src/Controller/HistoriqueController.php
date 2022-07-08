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
    #[Route('/compte-rendu/{description}', name: 'history')]
    public function history(ManagerRegistry $doctrine,Request $request,$description = ""): Response
    {

        $mois_annee = $request->query->get('ldate');
        if ($mois_annee == null) {
            $mois_annee = date('Y-m');
        }
        $date_split = explode('-',$mois_annee);
        $month = $date_split[1];
        $year = $date_split[0];
        //dd($month);
        $repository1 = $doctrine->getRepository(Mouvement::class);
        $histo  = $repository1->findByhistory($month,$year,$description);
        //dd($histo);
        if (!$histo) {
           return $this->render('noProduct.html.twig');
        }

        return $this->render('historique/history.html.twig', [
            'history' => $histo,
            'mois' => $month,
            'annee' => $year,
            'description' => $description
        ]);
    }
}
























