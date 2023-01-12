<?php

namespace App\Helpers;

class EventManager
{
    private static $instances;

    protected function __construct() {}

    protected function __clone() {}

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize the EventManager.");
    }

    public static function getInstance(): EventManager
    {
        if (empty(self::$instances)) {
            self::$instances = new static();
        }

        return self::$instances;
    }
}

$eventManager = EventManager::getInstance();