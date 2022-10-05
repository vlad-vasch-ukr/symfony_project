<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController {

    /**
    * @Route("/", name="home_page")
     */
    public function indexAction () : Response {
        return $this->render('HelloPage/index.html.twig');
    }
}
