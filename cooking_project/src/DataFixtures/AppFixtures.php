<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $data = file_get_contents('https://www.themealdb.com/api/json/v1/1/lookup.php?i=52772');
        $json_data = json_decode($data, true);

        $manager->flush();
    }
}
