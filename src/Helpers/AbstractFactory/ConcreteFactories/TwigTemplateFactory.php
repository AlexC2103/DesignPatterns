<?php

namespace App\Helpers\AbstractFactory\ConcreteFactories;

use App\Helpers\AbstractFactory\Page\PageTemplate;
use App\Helpers\AbstractFactory\Page\TwigPageTemplate;
use App\Helpers\AbstractFactory\Renderers\TemplateRenderer;
use App\Helpers\AbstractFactory\Renderers\TwigRenderer;
use App\Helpers\AbstractFactory\Template\TemplateFactory;
use App\Helpers\AbstractFactory\Titles\TitleTemplate;
use App\Helpers\AbstractFactory\Titles\TwigTitleTemplate;
use Twig\Environment;

class TwigTemplateFactory implements TemplateFactory
{

    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}