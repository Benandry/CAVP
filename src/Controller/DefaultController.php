<?php

namespace App\Controller;

use App\Entity\Types;
use App\Entity\Mouvement;
use App\Form\MouvementType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
    * @Route("/homepage", name="homepage")
    */
    public function homepage()
    {
        return $this->render('/home/homepage.html.twig');
    }
    /**
    * @Route("/product_dispo", name="Product_dispo")
    */
    public function test(ManagerRegistry $doctrine)
    {
        $product = $doctrine->getRepository(Types::class)->findByOne();
        $prodMouv = $doctrine->getRepository(Types::class)->findByProduct();
        $tab[] = [0];
        for ($i=0; $i < count($prodMouv); $i++) { 
           for ($j=0; $j < count($product); $j++) { 
             if ($product[$j]['objet']== $prodMouv[$i]['objet']) {
                $tab[$j] = $product[$j];
                dd($tab);
             }
             else
             {
                $tab[$j] = 0;
             }
           }
        }
        //dd($tab);
       // var_dump($prodMouv);
       dd($prodMouv);
      // dd(count($product));
        return $this->render('/produit_disponible.html.twig',['product' => $product]);
    }
    /**
    * @Route("/mouvement/entrer/sortie", name="mouvement")
    */
    public function new()
    {
        $mouvement = new Mouvement();
        $form = $this->createForm(MouvementType::class, $mouvement);
        return $this->render('/mouvement.html.twig',[ 'form' => $form->createView()]);
    }
}
?>