<?php

require_once(__DIR__ . '/../models/recipe.php');

class RecipesController {

  public function view($id) {
    $recipe = RecipeModel::findOne($id);
    $this->renderOne($recipe);
  }

  public function index() {
    $recipes = RecipeModel::all();
    $this->renderMany($recipes);
  }

  private function renderOne($recipe) {
    echo $recipe->name;
  }

  private function renderMany($recipes) {
    foreach($recipes as $recipe) {
      echo $recipe->name . "</br>";
    }
  }
}

