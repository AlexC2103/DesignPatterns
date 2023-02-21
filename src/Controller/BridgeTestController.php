<?php

namespace App\Controller;

use App\Helpers\Bridge\ConcretePages\SimplePage;
use App\Helpers\Bridge\ConcreteRenderers\HTMLRenderer;
use App\Helpers\Bridge\ConcreteRenderers\JsonRenderer;
use Symfony\Component\HttpFoundation\Response;

class BridgeTestController
{
    public function bridgeTest(): Response
    {

        $HTMLRenderer = new HTMLRenderer();
        $JSONRenderer = new JsonRenderer();

        $page = new SimplePage($HTMLRenderer, "Home", "Welcome to our Simple Page!");

        //$page->changeRenderer($JSONRenderer);

        return new Response(
            $page->view()
        );
    }
}