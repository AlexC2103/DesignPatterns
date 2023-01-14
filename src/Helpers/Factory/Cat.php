<?php

namespace App\Helpers\Factory;

class Cat implements Animal
{
    private $species;

    public function __construct()
    {
        $this->species = 'Cat';
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
        return "Meow!";
    }
}