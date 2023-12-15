<?php
namespace App\Controller;

use App\Entity\Produits;
use App\Form\ProductFormType;
use App\Repository\ProduitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/config/product')]
class ProductController extends AbstractController
{
    #[Route('/index',name: 'app_admin_product')]
    public function index(ProduitsRepository $repo): Response
    {
        return $this->render('admin/config/product/index.html.twig',[
            'products' => $repo->findProducts()
        ]);
    }

    #[Route('/new',name: 'app_admin_new_product')]
    public function create(EntityManagerInterface $em,Request $request):Response
    {
        $product = new Produits();
        $formType = $this->createForm(ProductFormType::class,$product);
        $formType->handleRequest($request);

        if ($formType->isSubmitted() && $formType->isValid()) {
            $em->persist($product);
            $em->flush();
            return $this->redirectToRoute('app_admin_product', [], Response::HTTP_SEE_OTHER);
        }

       return $this->renderForm('/admin/config/product/create.html.twig',[
            'form' => $formType
       ]);
    }

    #[Route('/edit/{id}',name: 'app_admin_edit_product')]
    public function edit(EntityManagerInterface $em,Request $request,Produits $product ):Response
    {
        $formType = $this->createForm(ProductFormType::class,$product);
        $formType->handleRequest($request);

        if ($formType->isSubmitted() && $formType->isValid()) {
            $em->flush();
            return $this->redirectToRoute('app_admin_product', [], Response::HTTP_SEE_OTHER);
        }
       return $this->renderForm('/admin/config/product/edit.html.twig',[
            'form' => $formType
       ]);
    }

    #[Route('/delete/{id}',name: 'app_admin_delete_product')]
    public function delete(EntityManagerInterface $em,Produits $product,Request $request): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $em->remove($product);
            $em->flush();
        }
        return $this->redirectToRoute('app_admin_product', [], Response::HTTP_SEE_OTHER);
    }
}