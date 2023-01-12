<?php

namespace App\Helpers\Observer;

interface Publisher
{
    //public function addSubscriber(Subscriber $subscriber): void;
    //public function removeSubscriber(Subscriber $subscriber): void;

    public function exportEvent(string $event): string;
}