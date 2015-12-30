<?php

require __DIR__ . '/../vendor/autoload.php';

use \Cooking\Models\RecipeModel;
use \Cooking\Mappers\RecipeMapper;

$mapper = new RecipeMapper();

$recipe = new RecipeModel();
$recipe->hydrate([
    "name" =>"Spinach Omelette",
    "description" => "Delicious omelette with spinach, feta and onion"
]);
$mapper->create($recipe);

$recipe = new RecipeModel();
$recipe->hydrate([
    "name" =>"Nutella Pancakes",
    "description" => "Pancakes with Nutella on top"
]);
$mapper->create($recipe);
