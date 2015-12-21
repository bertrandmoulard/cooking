<?php

require_once(__DIR__ . '/../models/recipe.php');

class RecipesController {

  public function view($id) {
    $recipe = RecipeModel::findOne($id);
    $this->renderOne($recipe);
  }

  private function renderOne($recipe) {
    echo $recipe->name;
  }
}

