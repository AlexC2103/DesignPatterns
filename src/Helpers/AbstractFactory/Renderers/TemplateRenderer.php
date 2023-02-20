<?php

namespace App\Helpers\AbstractFactory\Renderers;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}