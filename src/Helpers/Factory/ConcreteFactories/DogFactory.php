<?php

namespace App\Helpers\Factory\ConcreteFactories;

use App\Helpers\Factory\AnimalFactory;
use App\Helpers\Factory\Dog;

class DogFactory extends AnimalFactory
{
    public function createAnimal(): Dog
    {
        return new Dog;
    }
}