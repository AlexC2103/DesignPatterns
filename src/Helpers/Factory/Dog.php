<?php

namespace App\Helpers\Factory;

class Dog implements Animal
{
    private $species;

    public function __construct()
    {
        $this->species = 'Dog';
    }

    public function increaseNumber(): void
    {
        $this->numberOfSubjects++;
    }

    public function getSpecies(): string
    {
        return $this->species;
    }

    public function makeSound(): string
    {
        return "Woof Woof!";
    }
}