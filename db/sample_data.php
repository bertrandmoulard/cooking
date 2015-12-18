<?php

require_once(__DIR__ . '/../app/models/recipe.php');
require_once(__DIR__ . '/../app/models/chef.php');

$recipe = new RecipeModel("Spinach Omelette", "Delicious omelette with spinach, feta and onion");
$recipe->save();

$chef = new ChefModel("Nigella");
$chef->save();


