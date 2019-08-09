<?php

namespace App\Controller;

use App\Entity\House;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HouseController extends AbstractController
{
    /**
     * @Route("/house", name="house")
     */
    public function index()
    {
        return $this->render('house/index.html.twig', [
            'controller_name' => 'HouseController',
        ]);
    }

    /**
     * @Route("/house/createhouse", name="createhouse")
     */
    public function createhouse()
    {

        $em = $this->getDoctrine()->getManager();

        $house = new House();
        $house->setName('SuperMegaHouse');
        //TODO Допиши все остальные сеты


        // скажите Doctrine, что вы (в итоге) хотите сохранить Товар (пока без запросов)
        $em->persist($house);

        // на самом деле выполнить запросы (т.е. запрос INSERT)
        $em->flush();

        return new Response('Saved new product with id '.$house->getId());
        return $this->render('house/index.html.twig', [
            'controller_name' => 'createhouse',
        ]);
    }
}
