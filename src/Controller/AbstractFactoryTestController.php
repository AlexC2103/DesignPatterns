<?php

namespace App\Controller;

use App\Helpers\AbstractFactory\ConcreteFactories\PHPTemplateFactory;
use App\Helpers\AbstractFactory\ConcreteFactories\TwigTemplateFactory;
use App\Helpers\AbstractFactory\Page;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class AbstractFactoryTestController extends Command
{
    public function abstractFactoryTest(): Response {

        $page = new Page('Sample page', 'This is the body');

        return new Response(
            $page->render(new TwigTemplateFactory())
//            $page->render(new PHPTemplateFactory())
        );
    }
}