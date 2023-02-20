<?php

namespace App\Controller;

use App\Helpers\Template\ConcreteClasses\Facebook;
use App\Helpers\Template\ConcreteClasses\Twitter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TemplateTestController
{
    public function templateTest(Request $request): Response
    {
        $username = "Neo";
        $password = "123";

        $choice = $request->query->get("key");
        $choice = $request->request->get("key");

        $message = "Message for the SocialNetwork";

        if ($choice == 1) {
            $network = new Facebook($username, $password);
        } else {
            $network = new Twitter($username, $password);
        }

        $network->post($message);

        return new Response(
            '<html>
                        <body>
                            <form method="post">
                                <input type="submit" name="key" value="2">
                                <input type="submit" name="key" value="1">
                            </form> 
                        </body>
                    </html>');
    }
}