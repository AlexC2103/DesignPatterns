<?php

namespace App\Controller;

use App\Helpers\Settings;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function showMessage(): Response {

        $settings = Settings::getInstance();

        $message = $settings->showMessage("Singleton is globally accessed!");

        return new Response(
            '<html><body>'.$message.'</body></html>'
        );
    }
}