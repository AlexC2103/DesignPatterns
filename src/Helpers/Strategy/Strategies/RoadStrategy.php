<?php

namespace App\Helpers\Strategy\Strategies;

use App\Helpers\Strategy\RouteStrategy;

class RoadStrategy implements RouteStrategy
{
    public function buildRoute($startPoint, $finisPoint): string
    {
        // TODO: Implement buildRoute() method.
        $route = "Drive to destination";
        return $route;
    }

    public function showTransportMethod(): string
    {
        // TODO: Implement showTransportMethod() method.

        $transportationMethod = "car";

        return $transportationMethod;
    }
}