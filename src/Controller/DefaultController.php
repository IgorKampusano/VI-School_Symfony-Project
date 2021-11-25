<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */

    public function indexAction(): Response
    {
       return $this->render('base.html.twig');
    }

//    /**
//     * @Route("/name/{name}", name="show-name")
//     */
//
//    public function showNameAction($name): Response
//    {
//        $randomNumber = random_int(1,100);
//        return $this->render('order/show.html.twig', [
//            'number' => $randomNumber,
//            'number_list' => [
//                1, 2, 3, 4, 5
//            ],
//        ]);
//    }
}