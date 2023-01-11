<?php

namespace App\Helpers;

//implementation of the factory method
abstract class AnimalFactory
{
    abstract public function createAnimal(): Animal;
}

interface Animal
{
    public function increaseNumber(): void;
    public function getSpecies(): string;
    public function makeSound(): string;
}

class Dog implements Animal
{
    private $species;

    public function __construct() {
        $this->species = 'Dog';
    }

    public function increaseNumber(): void
    {
        $this->numberOfSubjects++;
    }

    public function getSpecies(): string {
        return $this->species;
    }

    public function makeSound(): string {
        return "Woof Woof!";
    }
}

class Cat implements Animal
{
    private $species;

    public function __construct() {
        $this->species = 'Cat';
    }

    public function increaseNumber(): void
    {
        $this->numberOfSubjects++;
    }

    public function getSpecies(): string {
        return $this->species;
    }

    public function makeSound(): string {
        return "Meow!";
    }
}

class Mouse implements Animal
{
    private $species;

    public function __construct() {
        $this->species = 'Mouse';
    }

    public function increaseNumber(): void
    {
        $this->numberOfSubjects++;
    }

    public function getSpecies(): string {
        return $this->species;
    }

    public function makeSound(): string {
        return "Squeak!";
    }
}
class DogFactory extends AnimalFactory
{
    public function createAnimal(): Dog {
        return new Dog;
    }
}

class CatFactory extends AnimalFactory
{
    public function createAnimal(): Cat {
        return new Cat;
    }
}

class MouseFactory extends AnimalFactory
{
    public function createAnimal(): Mouse {
        return new Mouse;
    }
}

class RandomFactory extends AnimalFactory
{
    public function createAnimal(): Animal {
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