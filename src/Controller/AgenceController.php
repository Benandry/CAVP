<?php 
    namespace App\Controller;

use App\Entity\Agence;
use App\Form\AgenceFormType;
use App\Repository\AgenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/admin/agence/config")]
class AgenceController extends AbstractController
{
    #[Route("/index", name: "app_agence_index")]
    public function index(AgenceRepository $repository): Response
    {
        return $this->render("admin/config/agence/index.html.twig",[
            'agences' =>$repository->findByAgences(),
        ]);
    }

    #[Route("/create", name: "app_agence_create")]
    public function create(EntityManagerInterface $em,Request $request): Response
    {
        $agence = new Agence();
        $agence_form = $this->createForm(AgenceFormType::class, $agence);
        $agence_form->handleRequest($request);
        
        if ($agence_form->isSubmitted() && $agence_form->isValid()) {
            $em->persist($agence);
            $em->flush();
            return $this->redirectToRoute('app_agence_index',$request->query->all());
        }

        return $this->renderForm("admin/config/agence/create.html.twig",[
            'form' =>$agence_form
        ]);
    }

    #[Route("/edit/{id}", name: "app_agence_edit")]
    public function edit(EntityManagerInterface $em,Agence $agence,Request $request): Response
    {
        $form = $this->createForm(AgenceFormType::class,$agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('app_agence_index',[],Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm("/admin/config/agence/edit.html.twig",[
            'form' => $form
        ]);
    }

    #[Route("/delete/{id}", name: "app_agence_delete")]
    public function delete(Agence $agence,EntityManagerInterface $em,Request $request) : Response
    {

        if ($this->isCsrfTokenValid('delete'.$agence->getId(), $request->request->get('_token'))) {
            $em->remove($agence);
            $em->flush();
            return $this->redirectToRoute("app_agence_index");
        }
    }
}