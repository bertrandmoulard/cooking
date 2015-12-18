<?php

require_once(__DIR__ . '/../app/models/recipe.php');

$recipe = new Recipe("Spinach Omelette", "Delicious omelette with spinach, feta and onion");
$recipe->save();


