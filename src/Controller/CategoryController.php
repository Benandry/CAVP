<?php
namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategoryFormType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/config/category')]
class CategoryController extends AbstractController
{
    #[Route('/index',name: 'app_admin_index_category')]
    public function index(CategorieRepository $repo):Response
    {
       return $this->render('admin/config/categorie/index.html.twig',[
        'categories' => $repo->findCategory()
       ]);
    }

    #[Route('/create',name: 'app_create_category')]
    public function create(Request $req,EntityManagerInterface $em):Response
    {

        $category = new Categorie();
        $form = $this->createForm(CategoryFormType::class, $category);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
           $em->persist($category);
           $em->flush();
           return $this->redirectToRoute('app_admin_index_category',[],Response::HTTP_SEE_OTHER);
        }

       return $this->renderForm('admin/config/categorie/create.html.twig',[
        'form' => $form
       ]);
    }

    #[Route('/edit/{id}',name: 'app_edit_category')]
    public function edit(EntityManagerInterface $em,Request $request, Categorie $categorie):Response
    {
      $form  = $this->createForm(CategoryFormType::class,$categorie);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
         $em->flush();
         return $this->redirectToRoute('app_admin_index_category',[],Response::HTTP_SEE_OTHER);
      }

       return $this->renderForm('admin/config/categorie/edit.html.twig',[
        'form' => $form
       ]);
    }
}