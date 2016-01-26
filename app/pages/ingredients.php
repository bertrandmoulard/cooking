<?php

require __DIR__ . '/../../vendor/autoload.php';

$controller = new Cooking\Controllers\IngredientsController();

if(isset($_GET['id'])) {
  $controller->view($_GET['id']);
} else {
  $controller->index();
}
