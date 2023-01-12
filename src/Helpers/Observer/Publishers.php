<?php

namespace App\Helpers\Observer;

use App\Helpers\Observer\Publisher;

abstract class Publishers implements Publisher
{
    //abstract public function addSubscriber(Subscriber $subscriber): void;
    //abstract public function removeSubscriber(Subscriber $subscriber): void;

    abstract public function exportEvent(string $event): string;
}