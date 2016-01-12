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
    "description" => "Delicious omelette with spinach, feta and onion"
]);
$recipe_mapper->create($recipe);

$recipe = new RecipeModel();
$recipe->hydrate([
    "name" =>"Nutella Pancakes",
    "description" => "Pancakes with Nutella on top"
]);
$recipe_mapper->create($recipe);

$chef->hydrate(["name" => "Ina Garten"]);
$chef_mapper->create($chef);

$chef->hydrate(["name" => "Martha Stewart"]);
$chef_mapper->create($chef);
