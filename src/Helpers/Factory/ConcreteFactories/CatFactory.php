<?php

namespace App\Helpers\Factory\ConcreteFactories;

use App\Helpers\Factory\AnimalFactory;
use App\Helpers\Factory\Cat;

class CatFactory extends AnimalFactory
{
    public function createAnimal(): Cat
    {
        return new Cat;
    }
}