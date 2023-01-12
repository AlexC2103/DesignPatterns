<?php

namespace App\Controller;

use App\Helpers\Observer\EventExporter;
use App\Helpers\EventManager;
use App\Helpers\Observer\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ObserverTestController extends AbstractController
{
    public function observerTest()
    {
        $eventManager = EventManager::getInstance();
        $user1 = new User('Alex', 'alex@gmail.com');
        $user2 = new User('Florin', 'florin@gmail.com');
        $user3 = new User('Veta', 'veta@gmail.com');

        $publisher1 = new EventExporter();

        $eventManager->attach($user1, $publisher1->exportEvent('EvenimentPublisher1'));
        $eventManager->attach($user2, $publisher1->exportEvent('EvenimentPublisher1'));
        $eventManager->attach($user3, $publisher1->exportEvent('EvenimentPublisher1'));

        $eventManager->notify('EvenimentPublisher2');

        return $this->render('observerTemplates/observer.twig.html');
    }
}