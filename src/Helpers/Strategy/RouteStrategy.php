<?php

namespace App\Helpers\Strategy;

interface RouteStrategy
{
    public function buildRoute($startPoint, $finisPoint): string;
    public function showTransportMethod(): string;
}