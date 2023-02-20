<?php

namespace App\Helpers\AbstractFactory\Renderers;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TwigRenderer extends AbstractExtension implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return \Twig::render($templateString, $arguments);
    }
}