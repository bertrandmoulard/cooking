<?php

require __DIR__ . '/../vendor/autoload.php';

use \Cooking\Models\RecipeModel;
use \Cooking\Mappers\RecipeMapper;

$recipe_mapper = new RecipeMapper();

// recipes
$recipe = new RecipeModel();
$recipe->hydrate([
    "name" =>"Rice Pilaf",
    "description" => "A basic rice pilaf is a handy, flavorful recipe to have in your repertoire, and it's easy to make. Just toast up some rice with onion, garlic, and butter; cook it in chicken broth and water; and then let it steam for a few minutes until fluffy and tender."
]);
$recipe_mapper->create($recipe);

$recipe = new RecipeModel();
$recipe->hydrate([
    "name" =>"Lobster Bisque",
    "description" => "This is a decadent lobster bisque that is surprisingly easy to prepare. Your guests will be impressed and feel pampered. I serve this with salad and hot, buttered French bread."
]);
$recipe_mapper->create($recipe);
