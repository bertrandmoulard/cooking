<?php

require_once(__DIR__ . '/../models/recipe.php');

class RecipesController {

  public function view($id) {
    $recipe = RecipeModel::find($id);
    $this->renderOne($recipe);
  }

    //$recipe = Recipe::find($id);
    echo $id;

  private function renderOne($recipe) {
    echo $recipe->name;
  }

  public function index() {

  }
}

