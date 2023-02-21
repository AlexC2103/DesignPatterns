<?php

namespace App\Helpers\AbstractFactory\Renderers;

use Symfony\Component\Console\Command\Command;
use Twig\Environment;

class TwigRenderer extends Command implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return $this->twig->render($templateString, $arguments);
    }
}