<?php

namespace App\Helpers\Strategy\Strategies;

use App\Helpers\Strategy\RouteStrategy;

class PublicTransportStrategy implements RouteStrategy
{
    public function buildRoute($startPoint, $finisPoint): string
    {
        // TODO: Implement buildRoute() method.
        $route = "Take the bus to destination";
        return $route;
    }

    public function showTransportMethod(): string
    {
        // TODO: Implement showTransportMethod() method.

        $transportationMethod = "bus";

        return $transportationMethod;
    }
}