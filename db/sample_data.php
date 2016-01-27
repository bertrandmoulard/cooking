<?php

require __DIR__ . '/../vendor/autoload.php';

use \Cooking\Models\RecipeModel;
use \Cooking\Models\ChefModel;
use \Cooking\Models\IngredientModel;
use \Cooking\Mappers\RecipeMapper;
use \Cooking\Mappers\ChefMapper;
use \Cooking\Mappers\IngredientMapper;

$recipe_mapper = new RecipeMapper();
$chef_mapper = new ChefMapper();
$ingredient_mapper = new IngredientMapper();

// recipes
$recipe = new RecipeModel();
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

// chefs
$chef = new ChefModel();
$chef->hydrate(["name" => "Ina Garten"]);
$chef_mapper->create($chef);

$chef = new ChefModel();
$chef->hydrate(["name" => "Martha Stewart"]);
$chef_mapper->create($chef);

// ingredients
$ingredient = new IngredientModel();
$ingredient->hydrate(["name"=>"onion"]);
$ingredient_mapper->create($ingredient);

$ingredient = new IngredientModel();
$ingredient->hydrate(["name"=>"tomato"]);
$ingredient_mapper->create($ingredient);
