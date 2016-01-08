<?php

namespace Cooking\Controllers;

abstract class BaseController {

    const TPL_BASE = "/../../templates/";

    protected $resource;

    public function render() {
        include __DIR__ . self::TPL_BASE . "layout/application.php";
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
        return new $class();
    }
}
