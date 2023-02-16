<?php

namespace App\Controller;

use App\Helpers\ChainOfResponsability\ConcreteHandlers\RoleCheckMiddleware;
use App\Helpers\ChainOfResponsability\ConcreteHandlers\ThrottlingMiddleware;
use App\Helpers\ChainOfResponsability\ConcreteHandlers\UserExistsMiddleware;
use App\Helpers\ChainOfResponsability\Server;
use Symfony\Component\HttpFoundation\Response;

class ChainOfResponsibilityController
{
    public function corTest(): Response {
        $server = new Server();
        $server->register("admin@example.com", "admin");
        $server->register("user@example.com", "user");

        $middleware = new ThrottlingMiddleware(2);
        $middleware
            ->linkWith(new UserExistsMiddleware($server))
            ->linkWith(new RoleCheckMiddleware());

        $server->setMiddleware($middleware);

        $userRegister = array("admin@example.com" => "admin", "user@example.com" => "pass", "asd" => "123");

        foreach($userRegister as $email => $password) {
            $server->logIn($email, $password);
        }

        return new Response();
    }
}