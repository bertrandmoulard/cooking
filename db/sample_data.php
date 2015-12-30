<?php

require __DIR__ . '/../vendor/autoload.php';

use \Cooking\Models\RecipeModel;

$recipe = new RecipeModel();
$recipe->hydrate([
    "name" =>"Spinach Omelette",
    "description" => "Delicious omelette with spinach, feta and onion"
]);

var_dump($recipe);
// $recipe->save();
