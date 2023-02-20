<?php

namespace App\Helpers\Template;

abstract class SocialNetwork
{
    public function __construct(
        protected string $username,
        protected string $password
    ) {}

    public function post(string $message)
    {
        if ($this->logIn($this->username, $this->password)) {
            $result = $this->sendData($message);
            $this->logOut();

            return $result;
        }

        return false;
    }

    function simulateNetworkLatency()
    {
        $i = 0;
        while ($i < 5) {
            echo ".";
            sleep(1);
            $i++;
        }
    }

    abstract public function logIn(string $userName, string $password): bool;

    abstract public function sendData(string $message): bool;

    abstract public function logOut(): void;
}