<?php

namespace App\Controller;

use App\Helpers\State\ConcreteStates\ConcreteStateA;
use App\Helpers\State\Context;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StateTestController
{
    #[Route('/app/state_test', name: 'state')]
    public function stateTest(): Response
    {
        $context = new Context(new ConcreteStateA());
        $context->request1();
        $context->request2();

        return new Response();
    }
}