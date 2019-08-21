<?php

namespace App\Controller;

use App\Entity\House;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

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
        $house->setUser(1);
        $house->setAddress("Челябинск");
        $house->setFlour(2);
        $house->setFlour(2);
        $date = new \DateTime('2018-05-09');
        $house->setStartYear($date);
        $house->setDescription("Тестовый дом");
        $house->setPict("pict1");
        $house->setRatio(1);
        $house->setPosts(1);
        $house->setSubscrTo(1);
        $house->setComments(1);
        //TODO Допиши все остальные сеты


        // скажите Doctrine, что вы (в итоге) хотите сохранить дом (пока без запросов)
        $em->persist($house);

        // на самом деле выполнить запросы (т.е. запрос INSERT)
        $em->flush();

        return $this->render('house/index.html.twig', [
            'controller_name' => 'createhouse',
            'answer' => 'Saved new product with id ' . $house->getId(),
        ]);
    }

    /**
     * Показать один дом - тут мы покажем все посты по всем категориям
     * @Route("/house/{id}", name="house_show")
     */
    public function showhouse($id)
    {
        $house = $this->getDoctrine()
            ->getRepository(House::class)
            ->find($id);
        if (isset($house)) {
            $user = $house->getUser();
        }

        if (!$house) {
            throw $this->createNotFoundException(
                'No House found for id ' . $id
            );
        }

        // отобразить шаблон
        // в шаблоне, отобразить всё с {{ house.name }}
        return $this->render('house/show.html.twig', [
            'house' => $house,
            'user' => $user
        ]);
    }
    /**
     * Покажет одну выбранную категорию у указанного дома и превью постов в ней
     * @Route("/house/{id}/{category}", name="house_show_cat")
     */
    public function showhousecategory($id,$category)
    {
        $house = $this->getDoctrine()
            ->getRepository(House::class)
            ->find($id);
        if (isset($house)) {
            $user = $house->getUser();
        }

        if (!$house) {
            throw $this->createNotFoundException(
                'No House found for id ' . $id
            );
        }

        // отобразить шаблон
        // в шаблоне, отобразить всё с {{ house.name }}
        return $this->render('house/show_cat.html.twig', [
            'house' => $house,
            'user' => $user,
            'category' => $category,
        ]);
    }
    /**
     * Покажет один пост в одной категории
     * @Route("/house/{id}/{category}/{postid}", name="house_show_post")
     */
    public function showhousepost($id,$category,$postid)
    {
        $house = $this->getDoctrine()
            ->getRepository(House::class)
            ->find($id);
        if (isset($house)) {
            $user = $house->getUser();
        }

        if (!$house) {
            throw $this->createNotFoundException(
                'No House found for id ' . $id
            );
        }

        return $this->render('house/show_post.html.twig', [
            'house' => $house,
            'user' => $user,
            'category' => $category,
            'post' => $postid,
        ]);
    }
}
