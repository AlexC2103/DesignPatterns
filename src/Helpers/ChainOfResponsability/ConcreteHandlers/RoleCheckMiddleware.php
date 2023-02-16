<?php

namespace App\Helpers\ChainOfResponsability\ConcreteHandlers;

use App\Helpers\ChainOfResponsability\Middleware;

class RoleCheckMiddleware extends Middleware
{
    public function check(string $email, string $password): bool
    {
        if ($email === "admin@example.com") {
            echo " RoleCheckMiddleware: Hello, admin! ";

            return true;
        }

        echo " RoleCheckMiddleware: Hello, user! ";

        return parent::check($email, $password);
    }
}