<?php

namespace App\Helpers;

class Observer
{

}

interface Subscriber
{
    public function update(): void;
}

interface Publisher
{
    public function addSubscriber(Subscriber $subscriber): void;
    public function removeSubscriber(Subscriber $subscriber): void;
}

abstract class Publishers implements Publisher
{
    abstract public function addSubscriber(Subscriber $subscriber): void;
    abstract public function removeSubscriber(Subscriber $subscriber): void;
}

class Store extends Publishers
{
    private $subscribers = [];

    public function addSubscriber(Subscriber $subscriber): void
    {

    }

    public function removeSubscriber(Subscriber $subscriber): void
    {
        // TODO: Implement removeSubscriber() method.
    }
}

$eventManager = EventManager::getInstance();
