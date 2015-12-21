<?php

require_once(__DIR__ . '/../controllers/recipes_controller.php');

$controller = new RecipesController();

if(isset($_GET['id'])) {
  $controller->view($_GET['id']);
} else {
  $controller->index();
}
