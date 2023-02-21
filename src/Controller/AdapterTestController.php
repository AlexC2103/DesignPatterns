<?php

namespace App\Controller;

use App\Helpers\Adapter\NotificationTypes\EmailNotification;
use App\Helpers\Adapter\NotificationTypes\SlackNotification;
use App\Helpers\Adapter\Notification;
use App\Helpers\Adapter\SlackApi;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdapterTestController
{
    #[Route('/app/adapter_test', name: 'adapter')]
    public function adapterTest(): Response
    {
        function clientCode(Notification $notification)
        {
            echo $notification->send("Website is down!",
                "<strong style='color:red;font-size: 50px;'>Alert!</strong> <br>" .
                "Our website is not responding. Call admins and bring it up!");
        }

        $notification = new EmailNotification("admin@gmail.com");
        clientCode($notification);

        $slackApi = new SlackApi("slack@gmail.com", "abcd");
        $notification = new SlackNotification($slackApi, "Example.com developers");
        clientCode($notification);

        return new Response ();
    }
}