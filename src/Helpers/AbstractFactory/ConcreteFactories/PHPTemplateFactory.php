<?php

namespace App\Helpers\AbstractFactory\ConcreteFactories;

use App\Helpers\AbstractFactory\Page\PageTemplate;
use App\Helpers\AbstractFactory\Page\PHPTemplatePageTemplate;
use App\Helpers\AbstractFactory\Renderers\PHPTemplateRenderer;
use App\Helpers\AbstractFactory\Renderers\TemplateRenderer;
use App\Helpers\AbstractFactory\Template\TemplateFactory;
use App\Helpers\AbstractFactory\Titles\PHPTemplateTitleTemplate;
use App\Helpers\AbstractFactory\Titles\TitleTemplate;

class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}