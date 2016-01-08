<?php

namespace Cooking\Helpers;

class Config {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $ini_path = __DIR__ . "/../../../config.ini";
            self::$instance = parse_ini_file($ini_path, true);
        }
        return self::$instance;
    }
}
