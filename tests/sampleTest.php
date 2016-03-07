<?php

require_once(__DIR__ . "/../vendor/autoload.php");

class SampleTest extends PHPUnit_Framework_TestCase {
    public function testSample() {
        $this->assertEquals(true, true);
    }
}
