<?php

namespace Cooking\Mappers;

class RecipeMapper extends BaseMapper {

    protected function getModelClass() {
        return '\Cooking\Models\RecipeModel';
    }

    protected function getTableName() {
        return 'recipes';
    }
}
