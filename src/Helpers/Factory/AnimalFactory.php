<?php

namespace App\Helpers\Factory;

abstract class AnimalFactory
{
    abstract public function createAnimal(): Animal;
}