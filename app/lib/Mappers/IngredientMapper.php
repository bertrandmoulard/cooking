<?php

namespace Cooking\Mappers;

class IngredientMapper extends BaseMapper {

  protected function getModelClass() {
     return '\Cooking\Models\IngredientModel';
  }

  protected function getTableName() {
      return 'ingredients';
  }


}
