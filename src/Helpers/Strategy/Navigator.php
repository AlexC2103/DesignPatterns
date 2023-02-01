<?php

namespace App\Helpers\Strategy;

class Navigator
{
    private $strategy;

    public function __construct(RouteStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(RouteStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function showRoute()
    {
        echo "You will be travelling by ".$this->strategy->showTransportMethod();
    }
}