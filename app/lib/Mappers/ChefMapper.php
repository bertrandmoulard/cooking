<?php

namespace Cooking\Mappers;

class ChefMapper extends BaseMapper {
  protected function getModelClass() {
      return '\Cooking\Models\ChefModel';
  }

  protected function getTableName() {
    return 'chefs';
  }
}
