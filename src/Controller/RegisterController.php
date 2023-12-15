<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

// #[IsGranted('ROLE_ADMIN')]
#[Route('/admin/user')]
class RegisterController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('/lists',name: 'app_users_lists',methods: ['GET'])]
    public function getUsers(UserRepository $repository): Response
    {
        return $this->render('register/users.html.twig',[
            'users' => $repository->findByUsers()
        ]);
    }
    #[Route('/register', name: 'page_inscription')]
    public function index(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $notif = null;
        $user = new User();
        $form = $this->createForm(RegisterType::class,$user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user->setPassword($encoder->encodePassword($user,$user->getPassword()));
            $this->entityManager->persist($user);
            $this->entityManager->flush();

            $notif = "Vous avez inscrit ";
            return $this->redirectToRoute('app_users_lists');
        }


        return $this->render('register/index.html.twig',[
            'formule' => $form->createView(),
            'notif' =>$notif
        ]);
    }

    #[Route('/edit/{id}',name: 'app_user_edit')]
    public function edit(User $user,Request $request): Response
    {
        $form = $this->createForm(RegisterType::class,$user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->redirectToRoute('app_users_lists',[],Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('register/edit.html.twig',[
            'formule' => $form
        ]);
    }

    #[Route('/delete/{id}',name: 'app_user_delete')]
    public function delete(User $user,Request $request):Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(),$request->request->get('_token'))) {
           $this->entityManager->remove($user);
           $this->entityManager->flush();
        }
        return $this->redirectToRoute('app_users_lists',[],Response::HTTP_SEE_OTHER);
    }

}
