<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Meal;
use App\Entity\Instruction;
use App\Entity\Ingredient;


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

        $meal2 = new Meal();

        $meal2->setName('Tarte aux pommes');
        $meal2->setCategory('Dessert');
        $meal2->setArea('France');
        $meal2->setImage('https://media.istockphoto.com/photos/homemade-apple-pie-picture-id986635116');

        $instruction = new Instruction();
        $instruction->setDescription($json_data['meals'][0]['strInstructions']);
        $instruction->setInstructionRank(1);
        $instruction->setMealId(1);

        $instruction2 = new Instruction();
        $instruction2->setDescription('Faire cuire le pommes. Mettre les pommes sur la pate. Faire cuire 20min');
        $instruction2->setInstructionRank(1);
        $instruction2->setMealId(2);

        $ingredient1 = new Ingredient;
        $ingredient1->setName($json_data['meals'][0]['strIngredient1']);
        $ingredient1->setMeasure($json_data['meals'][0]['strMeasure1']);
        $ingredient1->setMealId(1);
        $ingredient2 = new Ingredient;
        $ingredient2->setName($json_data['meals'][0]['strIngredient2']);
        $ingredient2->setMeasure($json_data['meals'][0]['strMeasure2']);
        $ingredient2->setMealId(1);
        $ingredient3 = new Ingredient;
        $ingredient3->setName($json_data['meals'][0]['strIngredient3']);
        $ingredient3->setMeasure($json_data['meals'][0]['strMeasure3']);
        $ingredient3->setMealId(1);
        $ingredient4 = new Ingredient;
        $ingredient4->setName($json_data['meals'][0]['strIngredient9']);
        $ingredient4->setMeasure($json_data['meals'][0]['strMeasure9']);
        $ingredient4->setMealId(1);
        $ingredient5 = new Ingredient;
        $ingredient5->setName($json_data['meals'][0]['strIngredient4']);
        $ingredient5->setMeasure($json_data['meals'][0]['strMeasure4']);
        $ingredient5->setMealId(1);
        $ingredient6 = new Ingredient;
        $ingredient6->setName($json_data['meals'][0]['strIngredient5']);
        $ingredient6->setMeasure($json_data['meals'][0]['strMeasure5']);
        $ingredient6->setMealId(1);
        $ingredient7 = new Ingredient;
        $ingredient7->setName($json_data['meals'][0]['strIngredient6']);
        $ingredient7->setMeasure($json_data['meals'][0]['strMeasure6']);
        $ingredient7->setMealId(1);
        $ingredient8 = new Ingredient;
        $ingredient8->setName($json_data['meals'][0]['strIngredient7']);
        $ingredient8->setMeasure($json_data['meals'][0]['strMeasure7']);
        $ingredient8->setMealId(1);
        $ingredient9 = new Ingredient;
        $ingredient9->setName($json_data['meals'][0]['strIngredient8']);
        $ingredient9->setMeasure($json_data['meals'][0]['strMeasure8']);
        $ingredient9->setMealId(1);

        $ingredient10 = new Ingredient;
        $ingredient10->setName('Pommes');
        $ingredient10->setMeasure('4');
        $ingredient10->setMealId(2);
        $ingredient11 = new Ingredient;
        $ingredient11->setName("Pate");
        $ingredient11->setMeasure(1);
        $ingredient11->setMealId(2);        
        $ingredient12 = new Ingredient;
        $ingredient12->setName('sucre');
        $ingredient12->setMeasure('3 cuillères à café');
        $ingredient12->setMealId(2);




        $manager->persist($meal);
        $manager->persist($instruction);
        $manager->persist($ingredient1);
        $manager->persist($ingredient2);
        $manager->persist($ingredient3);
        $manager->persist($ingredient4);
        $manager->persist($ingredient5);
        $manager->persist($ingredient6);
        $manager->persist($ingredient7);
        $manager->persist($ingredient8);
        $manager->persist($ingredient9);

        $manager->persist($meal2);
        $manager->persist($instruction2);
        $manager->persist($ingredient10);
        $manager->persist($ingredient11);
        $manager->persist($ingredient12);





        $manager->flush();
    }
}
