<?php

namespace App\Helpers\AbstractFactory\Renderers;

use Twig\Environment;

class TwigRenderer implements TemplateRenderer
{

    public function __construct(private Environment $twig)
    {
    }

    public function render(string $templateString, array $arguments = []): string
    {
        return $this->twig->render($templateString, $arguments);
    }
}