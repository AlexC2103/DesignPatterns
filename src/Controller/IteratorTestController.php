<?php

namespace App\Controller;

use App\Helpers\Iterator\WordsCollection;
use Symfony\Component\HttpFoundation\Response;

class IteratorTestController
{
    public function iteratorTest(): Response
    {
        $collection = new WordsCollection();
        $collection->addItem("First");
        $collection->addItem("Second");
        $collection->addItem("Third");
        $collection->addItem("Fourth");

        foreach ($collection->getIterator() as $item) {
            echo $item . " ";
        }
        return new Response();
    }
}