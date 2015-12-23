<?php

namespace Cooking\Controllers;

class BaseController {

  const TPL_BASE = __DIR__ . "/../templates/";

  public function render($template, $data) {
    include self::TPL_BASE . "layout/application.php";
  }
}
