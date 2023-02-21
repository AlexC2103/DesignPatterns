<?php

namespace App\Controller;

use App\Helpers\Iterator\WordsCollection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IteratorTestController
{
    #[Route('/app/iterator_test', name: 'iterator')]
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