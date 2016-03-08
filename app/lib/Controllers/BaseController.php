<?php

namespace Cooking\Controllers;

abstract class BaseController {

    protected abstract function getResourceName();

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

    protected function render($template, $data) {
        $template = $this->getResourceName() . "/$template";
        include __DIR__ . "/../../templates/layout/application.php";
    }

    private function getMapperInstance() {
        $class = 'Cooking\Mappers\\' . ucfirst($this->getResourceName()) . "Mapper";
        return new $class();
    }
}
