<?php

namespace Cooking\Models;

class IngredientModel extends BaseModel {

  protected $field_map = [
    'id'=> self::TYPE_INT,
    'name'=> self::TYPE_STRING,
  ];

}
