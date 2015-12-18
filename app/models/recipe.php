<?php

require_once(__DIR__ . '/../helpers/connection.php');

class Recipe {

  private $name;
  private $description;

  public function __construct($name, $description) {
    $this->name = $name;
    $this->description = $description;
  }

  public function save() {
    $connection = Connection::getInstance();
    $connection->exec(
      "INSERT INTO recipes (name, description) VALUES ('$this->name', '$this->description')"
    );
  }

  public static function find($id) {
    // returns recipe with given id
  }

  public static function all() {
    // returns all recipes
  }
}
