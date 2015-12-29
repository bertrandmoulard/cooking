<?php

namespace Cooking\Controllers;

use \Cooking\Models\Recipe;
use \Cooking\Finders\RecipeFinder;

class RecipesController extends BaseController {

    public function view($id) {
        $finder = new RecipeFinder();
        $recipe = $finder->find($id);
        $this->render('recipes/view.php', $recipe);
    }

    public function index() {
        $finder = new RecipeFinder();
        $recipes = $finder->all();
        $this->render('recipes/index.php', $recipes);
    }
}

