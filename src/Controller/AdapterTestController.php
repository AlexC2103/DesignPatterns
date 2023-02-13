<?php

namespace App\Controller;

use App\Helpers\Adapter\NotificationTypes\EmailNotification;
use Symfony\Component\HttpFoundation\Response;

class AdapterTestController
{
    public function adapterTest(): Response
    {
        $notification = new EmailNotification("developer@example.com");



        return new Response (

        );
    }
}