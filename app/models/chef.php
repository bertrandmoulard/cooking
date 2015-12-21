<?php

require_once(__DIR__ . '/../helpers/connection.php');

class ChefModel {

  private $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function create() {
    $connection = Connection::getInstance();
    $connection->exec(
      "INSERT INTO chefs (name) VALUES ('$this->name')"
    );
  }

  public static function findOne($id) {
    $connection = Connection::getInstance();
    $statement = $connection->prepare( "SELECT * FROM chefs where id=$id");
    $statement->execute();
    $res = $statement->fetch();
    return new ChefModel($res['name'], $res['description']);
  }
}
