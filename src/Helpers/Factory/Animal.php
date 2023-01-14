<?php

namespace App\Helpers\Factory;

interface Animal
{
    public function increaseNumber(): void;

    public function getSpecies(): string;

    public function makeSound(): string;
}