<?php

namespace App\Helpers\AbstractFactory\Page;

interface PageTemplate
{
    public function getTemplateString(): string;
}