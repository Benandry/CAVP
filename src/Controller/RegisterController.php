<?php

namespace App\Controller;

use App\Form\RegisterType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('/inscription-sur-cavp', name: 'page_inscription')]
    public function index(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $notif = null;
        $user = new User();
        $form = $this->createForm(RegisterType::class,$user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $user = $form->getData();
            $mdp = $encoder->encodePassword($user,$user->getPassword());
            
            $user->setPassword($mdp);
            $this->entityManager->persist($user);
            $this->entityManager->flush();

            $notif = "Vous avez inscrit ";
            return $this->redirectToRoute('app_login');
        }


        return $this->render('register/index.html.twig',[
            'formule' => $form->createView(),
            'notif' =>$notif
        ]);
    }
}
