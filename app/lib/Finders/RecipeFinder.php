<?php

namespace Cooking\Finders;

class RecipeFinder extends BaseFinder {
    protected $model_class = '\Cooking\Models\RecipeModel';
    protected $table = 'recipes';
}
