<?php

namespace Cooking\Models;

class ChefModel extends BaseModel {
    protected function getFieldMap() {
        return [
            'id' => self::TYPE_INT,
            'name' => self::TYPE_STRING
        ];
    }
}

