<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{

    /**
     * @Route("/hello", name="app_index")
     */
    public function index(): Response
    {

        return $this->render('hello.html.twig');
    }
    /**
     * @Route("hello/{param}", name="HelloWithName")
     */
    public function HelloWithName($param): Response
    {

        return new Response('hello' . $param);
    }
}
