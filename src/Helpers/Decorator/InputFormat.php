<?php

namespace App\Helpers\Decorator;

//interface that must be implemented by all concrete components and decorators
interface InputFormat
{
    public function formatText(string $text): string;
}