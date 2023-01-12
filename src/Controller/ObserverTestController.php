<?php

namespace App\Controller;

use App\Helpers\Observer\EventExporter;
use App\Helpers\EventManager;
use App\Helpers\Observer\User;
use Symfony\Component\HttpFoundation\Response;

class ObserverTestController
{
    public function observerTest(): Response {
        $eventManager = EventManager::getInstance();
        $user1 = new User('Alex', 'alex@gmail.com');
        $user2 = new User('Florin', 'florin@gmail.com');
        $user3 = new User('Veta', 'veta@gmail.com');

        $publisher = new EventExporter();

        $eventManager->attach($user1, $publisher->exportEvent('eveniment1'));

        return new Response(

        );
    }
}