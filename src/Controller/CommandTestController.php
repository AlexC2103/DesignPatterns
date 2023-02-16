<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class CommandTestController
{
    public function commandTest(): Response {

        return new Response();
    }
}