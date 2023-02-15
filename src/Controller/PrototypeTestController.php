<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Helpers\Prototype\Author;
use App\Helpers\Prototype\Page;

class PrototypeTestController extends AbstractController
{
    public function prototypeTest()
    {
        $author = new Author("Alex");
        $page = new Page("Page1", "Page1 body text", $author);

        $page->addComment("this is a nice page!");
        $draft = clone $page;

        return $this->render('prototypeTemplates/prototype.twig.html', [
            'pages' => [$page, $draft]
        ]);
    }
}