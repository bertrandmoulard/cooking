<?php

namespace Cooking\Mappers;

use \Cooking\Helpers\Connection;

abstract class BaseMapper {

    protected $model_class;
    protected $table;
    protected $pdo;

    public function __construct() {
        $this->pdo = Connection::getInstance();
    }

    protected function hydrateModel(array $raw_result) {
        $model = new $this->model_class;
        $model->hydrate($raw_result);
        return $model;
    }

    public function find($id) {
        $statement = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id=?");
        $statement->execute([$id]);
        $result = $statement->fetch();
        return $this->hydrateModel($result);
    }

    public function all() {
        $statement = $this->pdo->prepare("SELECT * FROM {$this->table} ORDER BY id DESC");
        $statement->execute();
        $results = $statement->fetchAll();
        $models = [];
        foreach($results as $result) {
            array_push($models, $this->hydrateModel($result));
        }
        return $models;
    }
}
