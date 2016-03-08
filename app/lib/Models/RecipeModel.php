<?php

namespace Cooking\Models;

class RecipeModel extends BaseModel {
    protected function getFieldMap() {
        return [
            'id' => self::TYPE_INT,
            'name' => self::TYPE_STRING,
            'description' => self::TYPE_STRING,
            'main_image_file' => self::TYPE_STRING
        ];
    }
}
