<?php

namespace App\Controller;

use App\Entity\Mouvement;
use App\Form\MouvementType;
use App\Repository\MouvementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/mouvement/controller/crud')]
class MouvementCrudController extends AbstractController
{
    #[Route('/', name: 'mouvement_controller_crud_index', methods: ['GET'])]
    public function index(MouvementRepository $mouvementRepository): Response
    {
       // dd($mouvementRepository->findByhistory());
        return $this->render('mouvement_controller_crud/index.html.twig',[
            'mouvements' => $mouvementRepository->findByhistory()
        ]);
    }

    #[Route('/new', name: 'mouvement_controller_crud_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $mouvement = new Mouvement();
        $form = $this->createForm(MouvementType::class, $mouvement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           // dd($form->getData());
            $entityManager->persist($mouvement);
            $entityManager->flush();

            return $this->redirectToRoute('mouvement_controller_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('mouvement_controller_crud/new.html.twig', [
            'mouvement' => $mouvement,
            'form' => $form,
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
