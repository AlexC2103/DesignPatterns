<?php

namespace App\Controller;

use App\Helpers\Template\ConcreteClasses\Facebook;
use App\Helpers\Template\ConcreteClasses\Twitter;
use Symfony\Component\HttpFoundation\Response;
use Twig\Source;

class TemplateTestController
{
    public function templateTest(): Response
    {
        $username = "Neo";
        $password = "123";
        $message = "Message for the SocialNetwork";

        $choice = 2;

        if ($choice == 1) {
            $network = new Facebook($username, $password);
        } else {
            $network = new Twitter($username, $password);
        }

        $network->post($message);

        return new Response();
    }
}