<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Meal;
use App\Entity\Instruction;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $data = file_get_contents('https://www.themealdb.com/api/json/v1/1/lookup.php?i=52772');
        $json_data = json_decode($data, true);

        $meal = new Meal();

        $meal->setName($json_data['meals'][0]['strMeal']);
        $meal->setCategory($json_data['meals'][0]['strCategory']);
        $meal->setArea($json_data['meals'][0]['strArea']);
        $meal->setImage($json_data['meals'][0]['strMealThumb']);


        $instruction = new Instruction();
        $instruction->setDescription($json_data['meals'][0]['strInstructions']);
        $instruction->setInstructionRank(1);
        $instruction->setMealId(1);




        $manager->persist($meal);
        $manager->persist($instruction);



        $manager->flush();
    }
}
