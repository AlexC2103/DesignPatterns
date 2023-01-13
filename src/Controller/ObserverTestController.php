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

        $eventManager->attach($user1, 'sendEmail');
        $eventManager->attach($user2, 'sendEmail');
        $eventManager->attach($user3, 'sendEmail');

        $eventManager->notify('sendEmail', ['admin@gmail.com']);

        return $this->render('observerTemplates/observer.twig.html', [
            'users' => [$user1, $user2, $user3]
        ]);
    }
}