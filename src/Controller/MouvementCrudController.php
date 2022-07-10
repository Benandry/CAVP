<?php

namespace App\Controller;

use App\Entity\Mouvement;
use App\Form\MouvementType;
use App\Repository\MouvementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//#[IsGranted('ROLE_ADMIN')];
#[Route('/mouvement/controller/crud')]
class MouvementCrudController extends AbstractController
{
    //#[IsGranted('ROLE_ADMIN')];
    #[Route('/', name: 'mouvement_controller_crud_index', methods: ['GET'])]
    public function index(MouvementRepository $mouvementRepository): Response
    {
        //dd($mouvementRepository->findByMouvement());
        return $this->render('mouvement_controller_crud/index.html.twig',[
            'mouvements' => $mouvementRepository->findByMouvement()
        ]);
    }

    #[Route('/new/{cat}', name: 'mouvement_controller_crud_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,ManagerRegistry $doctrine ,$cat = " "): Response
    {
        $mouvement = new Mouvement();
        $form = $this->createForm(MouvementType::class, $mouvement);
        $form->handleRequest($request);
                
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $types = $data->getTypes()->getId();
            if ($types == 2) {
                $quantite = $data->getQuantite();
                $quantite = -$quantite;
                $val = $data->setQuantite($quantite);
               // dd($val);
                $entityManager->persist($mouvement);
                $entityManager->flush();
            }
            
            $entityManager->persist($mouvement);
            $entityManager->flush();

            return $this->redirectToRoute('mouvement_controller_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('mouvement_controller_crud/new.html.twig', [
            'mouvement' => $mouvement,
            'form' => $form
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
    public function edit(Request $request, Mouvement $mouvement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MouvementType::class, $mouvement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('mouvement_controller_crud_index', [], Response::HTTP_SEE_OTHER);
        }
       // dd($mouvement);
        return $this->renderForm('mouvement_controller_crud/edit.html.twig', [
            'mouvement' => $mouvement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'mouvement_controller_crud_delete', methods: ['POST'])]
    public function delete(Request $request, Mouvement $mouvement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mouvement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($mouvement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mouvement_controller_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
