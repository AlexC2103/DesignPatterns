<?php

namespace App\Helpers\Decorator\ConcreteDecorators;

use App\Helpers\Decorator\TextFormat;

class PlainTextFilter extends TextFormat
{
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);
        return strip_tags($text);
    }
}