<?php

namespace App\Helpers\AbstractFactory\Titles;

class TwigTitleTemplate implements TitleTemplate
{

    public function getTemplateString(): string
    {
        return "<h1> {{ title }} </h1>";
    }
}