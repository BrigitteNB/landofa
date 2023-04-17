<?php

namespace App\Controller\Visitor\Welcome;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    #[Route('/', name: 'visitor.welcome.index')]
    public function index(): Response
    {
        return $this->render('pages/visitor/welcome/index.html.twig');
    }

    // #[Route('/test', name: 'visitor.welcome.test')]
    // public function test(): Response
    // {
    //     dd('test');
    //     // return $this->render('pages/visitor/welcome/index.html.twig');
    // }
}
