<?php

namespace App\Helpers\ChainOfResponsability\ConcreteHandlers;

use App\Helpers\ChainOfResponsability\Middleware;
use App\Helpers\ChainOfResponsability\Server;

class UserExistsMiddleware extends Middleware
{
    private $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->server->hasEmail($email)) {
            echo " UserExistsMiddleware: This email is not registered! ";

            return false;
        }

        if (!$this->server->isValidPassword($email, $password)) {
            echo " UserExistsMiddleware: Wrong password! ";

            return false;
        }

        return parent::check($email, $password);
    }
}