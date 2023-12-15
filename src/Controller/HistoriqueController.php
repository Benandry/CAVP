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
    #[Route('/admin/compte-rendu/{description}', name: 'admin_compte_rendu')]
    public function history(ManagerRegistry $doctrine,Request $request,$description = ""): Response
    {

        $month = $request->query->get('mois');
        $year = $request->query->get('year');
       // dd($year);
        if ($month && $year) {
            $month = date('m');
            $year = date('Y');
        }

        $repository1 = $doctrine->getRepository(Mouvement::class);
        $histo  = $repository1->findByhistory($month,$year,$description);

        // if (!$histo) {
        //    return $this->render('noProduct.html.twig');
        // }

        // dd($histo);
        return $this->render('admin/rapport/compte_rendu.html.twig', [
            'history' => $histo,
            'mois' => $month,
            'annee' => $year,
            'description' => $description
        ]);
    }
}
























