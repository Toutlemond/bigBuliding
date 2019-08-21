<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    /**
     * @Route("", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/number", name="number")
     */
    public function numder()
    {
        $num = rand(0,99);
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'num' => $num,
        ]);
    }
}
