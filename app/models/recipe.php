<?php

require_once(__DIR__ . '/../helpers/connection.php');

class RecipeModel {

  public $name;
  public $description;

  public function __construct($name, $description) {
    $this->name = $name;
    $this->description = $description;
  }

  public function create() {
    $connection = Connection::getInstance();
    $connection->exec(
      "INSERT INTO recipes (name, description) VALUES ('$this->name', '$this->description')"
    );
  }

  public static function findOne($id) {
    $connection = Connection::getInstance();
    $statement = $connection->prepare( "SELECT * FROM recipes where id=$id");
    $statement->execute();
    $res = $statement->fetch();
    return new RecipeModel($res['name'], $res['description']);
  }

  public static function all() {
    $connection = Connection::getInstance();
    $statement = $connection->prepare( "SELECT * FROM recipes order by id DESC");
    $statement->execute();
    $recipes = [];
    while($row = $statement->fetch()) {
      array_push($recipes, new RecipeModel($row['name'], $row['description']));
    }
    return $recipes;
  }
}
