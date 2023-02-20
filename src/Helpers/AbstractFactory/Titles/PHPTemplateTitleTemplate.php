<?php

namespace App\Helpers\AbstractFactory\Titles;

class PHPTemplateTitleTemplate implements TitleTemplate
{

    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}