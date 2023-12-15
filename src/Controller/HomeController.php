<?php 
namespace App\Controller;

use App\Repository\AgenceRepository;
use App\Repository\CategorieRepository;
use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(AgenceRepository $agenceRepo,ProduitsRepository $productRepo,CategorieRepository $categorieRepo):Response
    {
      return $this->render('home/index.html.twig',[
        'agence' => count($agenceRepo->findAll()),
        'product' => 12,
        'categorie' => count($categorieRepo->findAll()),
      ]);
    }
}