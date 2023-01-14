<?php

namespace App\Helpers\Observer;


use App\Helpers\Observer\Subscriber;

class EventManager
{
    //start singleton settings
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
    //******************************** end of singleton settings

    private $subscribers = [];

    private function initEventGroup(string $event): void
    {
        if (!isset($this->subscribers[$event])) {
            $this->subscribers[$event] = [];
        }
    }

    private function getEventSubscribers(string $event): array
    {
        $this->initEventGroup($event);
        $group = $this->subscribers[$event];

        return $group;
    }

    public function attach(Subscriber $subscriber, string $event): void
    {
        $this->subscribers[$event][] = $subscriber;
    }

    public function detach(Subscriber $subscriber, string $event): void
    {
        foreach ($this->getEventSubscribers($event) as $key => $s) {
            if ($s == $subscriber) {
                unset($this->subscribers[$event][$key]);
            }
        }
    }

    public function notify(string $event, array $params): void
    {
        echo $event." is being broadcasted.\n";

        foreach ($this->getEventSubscribers($event) as $subscriber) {
            $subscriber->sendEmail($params[0]);
        }
    }
}

$eventManager = EventManager::getInstance();