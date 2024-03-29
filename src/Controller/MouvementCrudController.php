<?php

namespace App\Controller;

use App\Entity\Mouvement;
use App\Entity\Situation;
use App\Form\MouvementType;
use App\Repository\MouvementRepository;
use App\Repository\SituationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//#[IsGranted('ROLE_ADMIN')];
#[Route('/admin/mouvement')]
class MouvementCrudController extends AbstractController
{
    //#[IsGranted('ROLE_ADMIN')];
    #[Route('/index', name: 'app_operation_list', methods: ['GET'])]
    public function index(MouvementRepository $mouvementRepository): Response
    {
        $mouvement =  $mouvementRepository->findAllMouvement();
        return $this->render('admin/mouvement/index.html.twig',[
            'mouvements' => $mouvement
        ]);
    }

    #[Route('/new', name: 'app_operation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,ManagerRegistry $doctrine ,SituationRepository $repository): Response
    {   
        
        $array_number_out = $repository->findByMaxnumberOut();
        
        if(empty($array_number_out)){
            $numero_max = $array_number_out[0] = '22-00';
        }
        else {
            $numero_max = $array_number_out[0]['numero_sortie'];
        }
        
            // dd($numero_max);
  
        $mouvement = new Mouvement();
        $form = $this->createForm(MouvementType::class, $mouvement);
        $form->handleRequest($request);
       
        // dd($mouvement);
        $submit = false;
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $planche = $data->getNumberPlanche();
            $quantite = $data->getQuantite();
            
            if ($data->getProduit()->getTypes()->getId() == 1){
                $nombre_planche =  $data->setNumberPlanche(null);
            } else{
                $nombre_planche =  $data->setNumberPlanche($planche);
            }

            
            $types = $data->getTypes()->getId();
            if ($types == 2) {
                $quantite = -$quantite;
                $val = $data->setQuantite($quantite);
                //dd($val);
                $entityManager->persist($mouvement);
                $entityManager->flush();
            }
            elseif ($types == 1){
                $numero_de_sortie = $data->setNumberSortie(null);
                $entityManager->persist($mouvement);
                $entityManager->flush();
            }
            $moov = $repository->findBySubmitMouvement();
            #dd($moov);
            $submit = true;
            #dd($moov);
            #dd($moov[0]['quantite']);

            return $this->redirectToRoute('app_operation_list',[],Response::HTTP_SEE_OTHER);
            // return $this->renderForm('mouvement_controller_crud/new.html.twig', [
            //     'moov' => $moov,
            //     'isSubmit' => $submit,
            //     'form' => $form,
            //     'numero_max' =>$numero_max
            // ]);

            #return $this->redirectToRoute('mouvement_controller_crud_index', [], Response::HTTP_SEE_OTHER);

        }
        return $this->renderForm('admin/mouvement/create.html.twig', [
            'mouvement' => $mouvement,
            'form' => $form,
            'isSubmit' => $submit,
            'numero_max' => $numero_max
        ]);
    }

    #[Route('/{id}', name: 'mouvement_controller_crud_show', methods: ['GET'])]
    public function show(Mouvement $mouvement): Response
    {
        //dd($mouvement);
        return $this->render('mouvement_controller_crud/show.html.twig', [
            'mouvement' => $mouvement,
        ]);
    }

    #[Route('/{id}/edit', name: 'mouvement_controller_crud_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Mouvement $mouvement, EntityManagerInterface $entityManager,SituationRepository $repository): Response
    {
        $form = $this->createForm(MouvementType::class, $mouvement);
        $form->handleRequest($request);
        $numero_max = $repository->findByMaxnumberOut()[0]['numero_sortie'];
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $moov = $repository->findBySubmitMouvement();
            $submit = true;

            return $this->renderForm('mouvement_controller_crud/new.html.twig', [
                'mouvement' => $mouvement,
                'form' => $form,
                'isSubmit' => $submit,
                'numero_max' => $numero_max
            ]);
        }
       // dd($mouvement);
        return $this->renderForm('mouvement_controller_crud/edit.html.twig', [
            'mouvement' => $mouvement,
            'form' => $form
        ]);
    }

    #[Route('/{id}', name: 'mouvement_controller_crud_delete', methods: ['POST'])]
    public function delete(Request $request, Mouvement $mouvement, EntityManagerInterface $entityManager,SituationRepository $repository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mouvement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($mouvement);
            $entityManager->flush();
        }
        $moov = $repository->findBySubmitMouvement();
        $submit = true;
        $form = $this->createForm(MouvementType::class, $mouvement);
        $form->handleRequest($request);
        $numero_max = $repository->findByMaxnumberOut()[0]['numero_sortie'];

        //dd(gettype($submit));

        return $this->renderForm('mouvement_controller_crud/new.html.twig', [
            'mouvement' => $mouvement,
            'form' => $form,
            'isSubmit' => $submit,
            'numero_max' => $numero_max
        ]);
    }
}
