<?php

namespace Cooking\Mappers;

class RecipeMapper extends BaseMapper {

    protected function getModelClass() {
        return '\Cooking\Models\RecipeModel';
    }

    protected function getTableName() {
        return 'recipes';
    }

    public function allWithChef() {
        $statement = $this->pdo->prepare("SELECT * FROM {$this->getTableName()} ORDER BY id DESC");
        $statement->execute();
        $results = $statement->fetchAll();
        $models = [];
        foreach($results as $result) {
            array_push($models, $this->hydrateModel($result));
        }
        return $models;
    }

}
