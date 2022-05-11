<?php

    namespace App\Controller;

    use Doctrine\Persistence\ManagerRegistry;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

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
        * @Route("/test", name="test")
        */
        public function test()
        {
            return $this->render('/test.html.twig');
        }
        /**
        * @Route("/questions/{slug}", name="app_question_show")
        */
        public function show($slug)
        {
            $answers = [
                'Bonjour voici la premier liste',
                'Deuxieme liste',
                'Troisieme liste',
                'Dernier liste'
            ];

            dump($this);
            return $this->render('/home/show.html.twig',[
                'question' =>ucwords(str_replace('-',' ',$slug)),
                'answers' => $answers,
            ]);
        }
    }
?>