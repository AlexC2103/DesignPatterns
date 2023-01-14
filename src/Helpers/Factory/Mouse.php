<?php

namespace App\Helpers\Factory;

class Mouse implements Animal
{
    private $species;

    public function __construct()
    {
        $this->species = 'Mouse';
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
        return "Squeak!";
    }
}