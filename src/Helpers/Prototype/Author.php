<?php

namespace App\Helpers\Prototype;

class Author
{
    private $name;

    private $pages = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addToPages(Page $page): void
    {
        $this->pages[] = $page;
    }
}