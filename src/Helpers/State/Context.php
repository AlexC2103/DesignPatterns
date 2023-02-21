<?php

namespace App\Helpers\State;

class Context
{
    /**
     * @var State A reference to the current state of the Context.
     */
    private $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    /**
     * The Context allows changing the State object at runtime.
     */
    public function transitionTo(State $state): void
    {
        echo "Context: Transition to " . get_class($state) . " ";
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function request1(): void
    {
        $this->state->handle1();
    }

    public function request2(): void
    {
        $this->state->handle2();
    }
}