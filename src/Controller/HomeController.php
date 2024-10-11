<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/home.html.twig',[
            'age' => 30,
            'name' => [
                'firstname' =>'Margaux',
                'lastname' =>'Puget'
            ],
            'tricks'=>['saut', 'coulise', 'rampe']
        ]);
    }
}
