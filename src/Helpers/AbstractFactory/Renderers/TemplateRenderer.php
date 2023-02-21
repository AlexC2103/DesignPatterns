<?php

namespace App\Helpers\AbstractFactory\Renderers;

use Twig\Environment;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}