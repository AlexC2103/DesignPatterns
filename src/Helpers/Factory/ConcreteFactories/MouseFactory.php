<?php

namespace App\Helpers\Factory\ConcreteFactories;

use App\Helpers\Factory\AnimalFactory;
use App\Helpers\Factory\Mouse;

class MouseFactory extends AnimalFactory
{
    public function createAnimal(): Mouse
    {
        return new Mouse;
    }
}