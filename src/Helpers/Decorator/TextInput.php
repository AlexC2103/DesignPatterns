<?php

namespace App\Helpers\Decorator;

//this class represents the original text without filtering or formatting
class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}