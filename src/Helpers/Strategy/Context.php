<?php

namespace App\Helpers\Strategy;

class Context
{
    private $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(StrategyInterface $strategy) {
        $this->strategy = $strategy;
    }


}