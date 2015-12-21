<?php

require_once(__DIR__ . '/../app/models/recipe.php');
require_once(__DIR__ . '/../app/models/chef.php');

$recipe = new RecipeModel("Spinach Omelette", "Delicious omelette with spinach, feta and onion");
$recipe->create();

$recipe = new RecipeModel("Nutella Crepes", "Crepes filled with Nutella");
$recipe->create();
