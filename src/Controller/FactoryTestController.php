<?php

namespace App\Controller;

use App\Helpers\Factory\ConcreteFactories\DogFactory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FactoryTestController
{
    #[Route('/app/factory_test', name: 'factory')]
    public function factoryTest(): Response
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