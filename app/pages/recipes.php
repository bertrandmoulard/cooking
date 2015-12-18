<?php

require_once(__DIR__ . '/../controllers/recipes_controller.php');

$controller = new RecipesController();
$controller->view($_GET['id']);
