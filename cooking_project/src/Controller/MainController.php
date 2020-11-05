<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\DataFixtures\AppFixtures;
use App\Entity\Meal;
use App\Repository\MealRepository;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index(MealRepository $repository): Response
    {
        $meallist = $repository->findAll();

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'meallist'=>$meallist
        ]);
    }

    
}
