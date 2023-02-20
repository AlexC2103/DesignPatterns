<?php

namespace App\Helpers\AbstractFactory\Page;

use App\Helpers\AbstractFactory\Titles\TitleTemplate;

abstract class BasePageTemplate implements PageTemplate
{
    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}