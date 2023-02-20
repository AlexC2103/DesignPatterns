<?php

namespace App\Helpers\AbstractFactory\Template;

use App\Helpers\AbstractFactory\Page\PageTemplate;
use App\Helpers\AbstractFactory\Renderers\TemplateRenderer;
use App\Helpers\AbstractFactory\Titles\TitleTemplate;

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}