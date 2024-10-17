<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
