<?php

namespace App\Helpers\Command;

/**
 * some commands can delegate more complex operations to other objects,
 * called "receivers."
 */
class ComplexCommand implements Command
{
    private $receiver;

    private $a;

    private $b;

    /**
     * Complex commands can accept one or several receiver objects along with
     * any context data via the constructor.
     */
    public function __construct(Receiver $receiver, string $a, string $b)
    {
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    }
    public function execute(): void
    {
        echo "ComplexCommand: Complex stuff should be done by a receiver object. ";
        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}