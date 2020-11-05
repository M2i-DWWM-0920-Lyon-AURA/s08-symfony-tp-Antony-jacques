<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Meal;

use App\Repository\MealRepository;
use App\Repository\IngredientRepository;
use App\Repository\InstructionRepository;


class SingleController extends AbstractController
{
    /**
     * @Route("/single/{id}", name="single")
     */
    public function show(int $id, MealRepository $repository, InstructionRepository $repo2, IngredientRepository $repo3): Response
    {
       // dd($repository);
        $singleMeal = $repository->find($id);

        $instruction = $repo2->findBy(
            [
                'meal_id'=>$id
            ]
            );

        $ingredient = $repo3->findBy(
            [
                'meal_id'=>$id
            ]
            );
            




       // dd( $ingredient);
        return $this->render('single/index.html.twig', [
            'controller_name' => 'SingleController',
            'singleMeal'=>$singleMeal,
            'instruction'=>$instruction[0],
            'ingredients'=>$ingredient

        ]);
    }
}
