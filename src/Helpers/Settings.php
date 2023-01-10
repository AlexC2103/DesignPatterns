<?php

namespace App\Helpers;

class Settings
{
    private static $instances;

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
}

$settings = Settings::getInstance();