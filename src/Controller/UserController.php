<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{

    #[Route('/inscription', name: 'inscription')]
    public function inscription(): Response
    {
        return $this->render('user/inscription.html.twig',[
            'age' => 30,
            'name' => [
                'firstname' =>'Margaux',
                'lastname' =>'Puget'
            ],
            'tricks'=>['saut', 'coulise', 'rampe']
        ]);
    }

    #[Route('/user/addUser', name: 'addUser')]
    public function addUser( Request $request): Response
    {
        return $this->render('home/home.html.twig',[
            'message'=>"Pour finaliser votre inscription veuillez regarder votre boite mail !"
        ]);
    }
}
