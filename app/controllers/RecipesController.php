<?php

namespace Cooking\Controllers;

use \Cooking\Models\Recipe;

class RecipesController extends BaseController {

  public function view($id) {
    $recipe = Recipe::findOne($id);
    $this->render('recipes/view.php', $recipe);
  }

  public function index() {
    $recipes = Recipe::all();
    $this->render('recipes/index.php', $recipes);
  }
}

