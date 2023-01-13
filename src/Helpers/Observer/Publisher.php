<?php

namespace App\Helpers\Observer;

use App\Helpers\Observer\Publishers;

abstract class Publisher implements Publishers
{
    //abstract public function addSubscriber(Subscriber $subscriber): void;
    //abstract public function removeSubscriber(Subscriber $subscriber): void;

    abstract public function exportEvent(string $event): string;
}