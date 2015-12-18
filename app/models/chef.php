<?php

require_once(__DIR__ . '/../helpers/connection.php');

class ChefModel {

  private $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function save() {
    $connection = Connection::getInstance();
    $connection->exec(
      "INSERT INTO chefs (name) VALUES ('$this->name')"
    );
  }

  public static function find($id) {
    // returns recipe with given id
  }

  public static function all() {
    // returns all recipes
  }
}
