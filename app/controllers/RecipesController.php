<?php

namespace Cooking\Controllers;

use \Cooking\Models\Recipe;

class RecipesController {

  public function view($id) {
    $recipe = Recipe::findOne($id);
    $this->renderOne($recipe);
  }

  public function index() {
    $recipes = Recipe::all();
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

