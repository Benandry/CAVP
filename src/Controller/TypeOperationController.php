<?php 
namespace App\Controller;

use App\Entity\Types;
use App\Form\OperationFormType;
use App\Repository\TypesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/type-operation')]

class TypeOperationController extends AbstractController
{
    #[Route('/index',name: 'app_type_operation',methods: ['GET'])]
    public function index(TypesRepository $repo):Response
    {
        return $this->render('admin/config/operation/index.html.twig',[
            'operations' => $repo->findAll()
        ]);
    }
    #[Route('/create',name: 'app_type_create')]
    public function create(Request $request,EntityManagerInterface $em):Response
    {
        $operation = new Types();
        $form = $this->createForm(OperationFormType::class,$operation);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
           $em->persist($operation);
           $em->flush();
           return $this->redirectToRoute('app_type_operation',[],Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('admin/config/operation/create.html.twig',[
            'form' => $form
        ]);
    }
    #[Route('/edit/{id}',name: 'app_type_edit')]
    public function edit(Types $operation,Request $request,EntityManagerInterface $em):Response
    {
        $form = $this->createForm(OperationFormType::class,$operation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           $em->flush();
           return $this->redirectToRoute('app_type_operation',[],Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('admin/config/operation/edit.html.twig',[
            'form' => $form
        ]);
    }
}