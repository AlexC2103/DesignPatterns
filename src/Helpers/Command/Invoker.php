<?php

namespace App\Helpers\Command;

class Invoker
{
    private $onStart;

    private $onFinish;

    public function setOnStart(Command $command): void
    {
        $this->onStart = $command;
    }

    public function setOnFinish(Command $command): void
    {
        $this->onFinish = $command;
    }

    /**
     * The Invoker does not depend on concrete command or receiver classes. The
     * Invoker passes a request to a receiver indirectly, by executing a
     * command.
     */

    public function doSomethingImportant(): void
    {
        echo " Invoker: Does anybody want something done before I begin? ";
        if ($this->onStart instanceof Command) {
            $this->onStart->execute();
        }

        echo " Invoker: ...doing something really important... ";

        echo " Invoker: Does anybody want something done after I finish? ";
        if ($this->onFinish instanceof Command) {
            $this->onFinish->execute();
        }
    }
}