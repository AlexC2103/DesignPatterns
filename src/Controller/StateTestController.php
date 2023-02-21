<?php

namespace App\Controller;

use App\Helpers\State\ConcreteStates\ConcreteStateA;
use App\Helpers\State\Context;
use Symfony\Component\HttpFoundation\Response;

class StateTestController
{
    public function stateTest(): Response
    {
        $context = new Context(new ConcreteStateA());
        $context->request1();
        $context->request2();

        return new Response();
    }
}