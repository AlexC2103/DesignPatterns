<?php

namespace App\Controller;

use App\Helpers\Settings;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function showMessage(): Response {

        $settings = Settings::getInstance();

        $message = $settings->showMessage("Settings can be globally accessed");

        return new Response(
            '<html>
                <body style="color:green">
                    <br>
                    <h3>'.$message.'</h3>
                </body>
             </html>'
        );
    }
}