<?php

namespace App\Helpers\Template\ConcreteClasses;

use App\Helpers\Template\SocialNetwork;

class Twitter extends SocialNetwork
{

    public function logIn(string $userName, string $password): bool
    {
        echo " Checking user's credentials... ";
        echo "Name: " . $this->username . " ";
        echo "Password: " > str_repeat("*", strlen($this->password)) . " ";

        $this->simulateNetworkLatency();

        echo "\n\nTwitter '" . $this->username . "' has logged in successfully.\n";

        return true;
    }

    public function sendData(string $message): bool
    {
        echo "Twitter: '" . $this->username . "' has posted '" . $message . "'.\n";

        return true;
    }

    public function logOut(): void
    {
        echo "Twitter: '" . $this->username . "' has been logged out.\n";
    }
}