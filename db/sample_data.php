<?php

require __DIR__ . '/../vendor/autoload.php';

use \Cooking\Models\RecipeModel;
use \Cooking\Models\ChefModel;
use \Cooking\Mappers\RecipeMapper;
use \Cooking\Mappers\ChefMapper;

$recipe_mapper = new RecipeMapper();
$chef_mapper = new ChefMapper();

$recipe = new RecipeModel();
$chef = new ChefModel();

$recipe->hydrate([
    "name" =>"Spinach Omelette",
    "description" => "Delicious omelette with spinach, feta and onion",
    "ingredients" => "Eggs, spinach, feta and onion, mushrooms, salt, pepper",
    "method" => "Whisk eggs with salt and pepper, fry the crap out of it"
]);
$recipe_mapper->create($recipe);

$recipe = new RecipeModel();
$recipe->hydrate([
    "name" =>"Nutella Pancakes",
    "description" => "Pancakes with Nutella on top",
    "ingredients" => "1 1/2 Cups all-purpose flour, 3 1/2 tsp baking powder, 1 tsp salt, 1 Tbsp sugar,
                      1 1/4 Cups milk, 1 egg, 3 Tbsp butter",
    "method" => "Sift flour, baking powder salt and sugar,
                      mix milk, egg and butter until smooth, fry pan the crap out of it"
]);
$recipe_mapper->create($recipe);

$chef->hydrate(["name" => "Ina Garten"]);
$chef_mapper->create($chef);

$chef->hydrate(["name" => "Martha Stewart"]);
$chef_mapper->create($chef);
