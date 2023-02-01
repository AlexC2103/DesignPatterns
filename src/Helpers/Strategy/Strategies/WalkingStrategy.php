<?php

namespace App\Helpers\Strategy\Strategies;

use App\Helpers\Strategy\RouteStrategy;

class WalkingStrategy implements RouteStrategy
{
    public function buildRoute($startPoint, $finisPoint): string
    {
        // TODO: Implement buildRoute() method.
        $route = "Walk to destination";
        return $route;
    }

    public function showTransportMethod(): string
    {
        // TODO: Implement showTransportMethod() method.

        $transportationMethod = "foot";

        return $transportationMethod;
    }
}