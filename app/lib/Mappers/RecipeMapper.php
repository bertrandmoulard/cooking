<?php

namespace Cooking\Mappers;

class RecipeMapper extends BaseMapper {
    protected $model_class = '\Cooking\Models\RecipeModel';
    protected $table = 'recipes';
}
