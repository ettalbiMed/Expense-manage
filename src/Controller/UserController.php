<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/user")
 */
class UserController extends AbstractController {

    /**
     * @Route("/profil", name="profil")
     */
    public function profil(Request $request) {
        $user = $this->getUser();
        dump($user);
        die();
        return $this->render('User/profil.html.twig');
    }
	//test

}
