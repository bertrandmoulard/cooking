<?php

namespace Cooking\Controllers;

use \Cooking\Models\Recipe;
use \Cooking\Mappers\RecipeMapper;

class RecipesController extends BaseController {

    public function view($id) {
        $mapper = new RecipeMapper();
        $recipe = $mapper->find($id);
        $this->render('recipes/view.php', $recipe);
    }

    public function index() {
        $mapper = new RecipeMapper();
        $recipes = $mapper->all();
        $this->render('recipes/index.php', $recipes);
    }
}

