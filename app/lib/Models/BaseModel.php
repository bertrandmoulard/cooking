<?php

namespace Cooking\Models;

abstract class BaseModel {

    const TYPE_INT = 'int';
    const TYPE_STRING = 'string';

    protected abstract function getFieldMap();
    protected $fields = [];

    public function __construct() {
        foreach (array_keys($this->getFieldMap()) as $field) {
            $this->__set($field, null);
        }
    }

    public function __set($field_name, $value) {
        if (isset($this->getFieldMap()[$field_name])) {
            $this->fields[$field_name] = $value;
        }
    }

    public function __get($field_name) {
        return $this->fields[$field_name];
    }

    public function getNonIdFieldKeys() {
        return array_diff(array_keys($this->fields), ['id']);
    }

    public function hydrate($data) {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }
}
