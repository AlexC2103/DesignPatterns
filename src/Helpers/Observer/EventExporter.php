<?php

namespace App\Helpers\Observer;

class EventExporter extends Publishers
{
    public function exportEvent(string $event): string
    {
        return $event;
    }
}