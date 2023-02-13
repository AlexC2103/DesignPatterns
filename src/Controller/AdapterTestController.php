<?php

namespace App\Controller;

use App\Helpers\Adapter\NotificationTypes\EmailNotification;
use App\Helpers\Adapter\NotificationTypes\SlackNotification;
use App\Helpers\Adapter\Notification;
use Symfony\Component\HttpFoundation\Response;

class AdapterTestController
{
    public function adapterTest(): Response
    {
        function clientCode(Notification $notification)
        {
            echo $notification->send("Website is down!",
                "<strong style='color:red;font-size: 50px;'>Alert!</strong>" .
                "Our website is not responding. Call admins and bring it up!");
        }

        $notification = new EmailNotification("admin@gmail.com");
        clientCode($notification);

        return new Response (

        );
    }
}