<?php

namespace App\Helpers\Command;

/**
 * Command Design Pattern
 *
 * Intent: Turns a request into a stand-alone object that contains all
 * information about the request. This transformation lets you parameterize
 * methods with different requests, delay or queue a request's execution, and
 * support undoable operations.
 */

/**
* The Command interface declares a method for executing a command.
 */
interface Command
{
    public function execute(): void;
}