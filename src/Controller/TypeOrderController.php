<?php
    namespace App\Controller;

use App\Entity\OrderTypes;
use App\Form\OrderTypeFormType;
use App\Repository\OrderTypesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/config/typeorder')]
class TypeOrderController extends AbstractController
{
    #[Route('/index',name: 'app_config_type',methods: ['GET'])]
    public function index(OrderTypesRepository $repository,Request $request):Response
    {
        try {
            $types = $repository->findTypeOrders();
        } catch (\Exception $th) {
            return new JsonResponse($th->getMessage());
        }
        return $this->render('/admin/config/types/index.html.twig',[
            'types' => $types ,
        ]);
    }

    #[Route('/create',name: 'app_config_create')]
    public function create(EntityManagerInterface $em,Request $request): Response
    {
        $type = new OrderTypes();
        $formType = $this->createForm(OrderTypeFormType::class,$type);
        $formType->handleRequest($request);

        if ($formType->isSubmitted() && $formType->isValid()) {
            $em->persist($type);
            $em->flush();
            return $this->redirectToRoute('app_config_type',[
                'ea' => $request->query->get('eaContext'),
                'menuIndex' => $request->query->get('menuIndex'),
                'submenuIndex' => $request->query->get('submenuIndex'),

            ]);
        }

        return $this->renderForm('/admin/config/types/create.html.twig',[
            'form' => $formType
        ]);
    }

    #[Route('/edit/{id}',name: 'app_type_order_edit')]
    public function edit(EntityManagerInterface $em,Request $request,OrderTypes $type): Response
    {
        $formType = $this->createForm(OrderTypeFormType::class,$type);
        $formType->handleRequest($request);

        if ($formType->isSubmitted() && $formType->isValid()) {
            $em->flush();
            return $this->redirectToRoute('app_config_type',[], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('/admin/config/types/edit.html.twig',[
            'form' => $formType,
            'type' =>$type
        ]);
    }

    #[Route('/delete/{id}',name: 'app_type_order_delete',methods:['POST'])]
    public function delete(EntityManagerInterface $entityManager,OrderTypes $type,Request $request)
    {
        if ($this->isCsrfTokenValid('delete'.$type->getId(), $request->request->get('_token'))) {
            $entityManager->remove($type);
            $entityManager->flush();
        }
        
        return $this->redirectToRoute('app_config_type', [], Response::HTTP_SEE_OTHER);
    }
}