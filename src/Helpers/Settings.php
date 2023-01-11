<?php

namespace App\Helpers;

//implementation of a singleton method
class Settings
{
    private static $instances;
    private $backGroundColor;

    protected function __construct() { }
    protected function __clone() { }
    public function __wakeup() {
        throw new \Exception("Cannot unserialize the settings.");
    }

    public static function getInstance(): Settings
    {
        if (empty(self::$instances)) {
            self::$instances = new static();
        }

        return self::$instances;
    }

    public function showMessage($message) {
        return $message.'!';
    }
    public function setBackGroundColor($color) {
        $this->backGroundColor = $color;
    }
    public function getBackGroundColor() {
        return $this->backGroundColor;
    }
}

$settings = Settings::getInstance();