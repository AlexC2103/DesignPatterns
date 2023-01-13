<?php

namespace App\Helpers\Observer;

class EventExporter extends Publisher
{
    public function exportEvent(string $event): string
    {
        return $event;
    }
}