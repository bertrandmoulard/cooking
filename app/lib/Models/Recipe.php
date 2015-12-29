<?php

namespace Cooking\Models;

class Recipe extends Base {

    protected $field_map = [
        'id' => self::TYPE_INT,
        'name' => self::TYPE_STRING,
        'description' => self::TYPE_STRING,
    ];
}

