<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController {

    #[Route('/{myVar}', name: 'main')]
    public function index(string $myVar): Response {
        return $this->render('main/index.html.twig', [
            'myData' => $myVar 
        ]);
    }
}
