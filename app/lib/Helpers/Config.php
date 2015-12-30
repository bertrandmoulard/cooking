<?php

namespace Cooking\Helpers;

class Config {
    private static $instance = NULL;
    private static $file = __DIR__ . "/../../../config.ini";

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = parse_ini_file(self::$file, true);
        }
        return self::$instance;
    }
}
