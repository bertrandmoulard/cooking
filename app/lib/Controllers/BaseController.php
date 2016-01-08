<?php

namespace Cooking\Controllers;

abstract class BaseController {

    protected $resource;

    public function render($template, $data) {
        $template = "$this->resource/$template";
        include __DIR__ . "/../../templates/layout/application.php";
    }

    public function view($id) {
        $mapper = $this->getMapperInstance();
        $model = $mapper->find($id);
        $this->render('view.php', $model);
    }

    public function index() {
        $mapper = $this->getMapperInstance();
        $models = $mapper->all();
        $this->render('index.php', $models);
    }

    private function getMapperInstance() {
        $class = 'Cooking\Mappers\\' . $this->resource . "Mapper";
        //namespace for Cooking\Mappers\RecipesMapper
        return new $class();
    }
}
