<?php

namespace App\Controller;

use App\Helpers\AbstractFactory\ConcreteFactories\PHPTemplateFactory;
use App\Helpers\AbstractFactory\ConcreteFactories\TwigTemplateFactory;
use App\Helpers\AbstractFactory\Page;
use Symfony\Component\HttpFoundation\Response;

class AbstractFactoryTestController
{
    public function abstractFactoryTest(): Response {

        $page = new Page('Sample page', 'This is the body');

        return new Response(
            $page->render(new TwigTemplateFactory())
//            $page->render(new PHPTemplateFactory())
        );
    }
}