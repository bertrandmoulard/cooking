<?php

namespace Cooking\Models;

class RecipeModel extends BaseModel {

    protected $field_map = [
        'id' => self::TYPE_INT,
        'name' => self::TYPE_STRING,
        'description' => self::TYPE_STRING,
        'ingredients' => self::TYPE_STRING,
        'method' => self::TYPE_STRING
    ];
}

