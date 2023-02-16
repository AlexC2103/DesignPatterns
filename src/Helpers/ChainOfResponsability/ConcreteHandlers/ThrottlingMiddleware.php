<?php

namespace App\Helpers\ChainOfResponsability\ConcreteHandlers;

use App\Helpers\ChainOfResponsability\Middleware;

class ThrottlingMiddleware extends Middleware
{
    private $requestsPerMinute;

    private $requests;

    private $currentTime;

    public function __construct(int $requestsPerMinute)
    {
        $this->requestsPerMinute = $requestsPerMinute;
        $this->currentTime = time();
    }

    public function check(string $email, string $password): bool
    {
        if (time() > $this->currentTime + 60) {
            $this->requests = 0;
            $this->currentTime = time();
        }

        $this->requests++;

        if ($this->requests > $this->requestsPerMinute) {
            echo " ThrottlingMiddleware: Request limit exceeded! ";
            die();
        }

        return parent::check($email, $password);
    }
}