<?php

namespace App\Controller;

use App\Helpers\Command\ComplexCommand;
use App\Helpers\Command\Invoker;
use App\Helpers\Command\Receiver;
use App\Helpers\Command\SimpleCommand;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandTestController
{
    #[Route('/app/command_test', name: 'command')]
    public function commandTest(): Response {
        $invoker = new Invoker();
        $invoker->setOnStart(new SimpleCommand("Say Hi!"));

        $receiver = new Receiver();
        $invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

        $invoker->doSomethingImportant();

        return new Response();
    }
}