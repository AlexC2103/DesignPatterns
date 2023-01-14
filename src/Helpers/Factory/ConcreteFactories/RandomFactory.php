<?php

namespace App\Helpers\Factory\ConcreteFactories;

use App\Helpers\AnimalFactory;
use App\Helpers\Factory\Animal;

class RandomFactory extends AnimalFactory
{
    public function createAnimal(): Animal
    {
        switch (rand(1, 3)) {
            case 1:
                return new Dog;
                break;
            case 2:
                return new Cat;
                break;
            case 3:
                return new Mouse;
                break;
        }

        return 0;
    }
}