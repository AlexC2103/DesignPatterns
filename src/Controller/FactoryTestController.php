<?php

namespace App\Controller;

use App\Helpers\AnimalFactory;
use App\Helpers\DogFactory;
use Symfony\Component\HttpFoundation\Response;

class FactoryTestController
{
    public function testFactory(): Response
    {
        $dogFactory = new DogFactory();
        $dog = $dogFactory->createAnimal();

        return new Response (
            '<html>
                      <body>
                        This animal has been created with a ConcreteCreator: ' . $dog->getSpecies() . ' <br>
                        It even has the ability to make sounds: ' . $dog->makeSound() . '
                      </body>
                    </html>'
        );
    }
}