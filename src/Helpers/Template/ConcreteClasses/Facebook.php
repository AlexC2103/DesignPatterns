<?php

namespace App\Helpers\Template\ConcreteClasses;

use App\Helpers\Template\SocialNetwork;

class Facebook extends SocialNetwork
{

    public function logIn(string $userName, string $password): bool
    {
        echo " Checking user's credentials... ";
        echo "Name: " . $this->username . " ";
        echo "Password: " > str_repeat("*", strlen($this->password)) . " ";

        $this->simulateNetworkLatency();

        echo "\n\nFacebook: '" . $this->username . "' has logged in successfully.\n";

        return true;
    }

    public function sendData(string $message): bool
    {
        echo "Facebook: '" . $this->username . "' has posted '" . $message . "'.\n";

        return true;
    }

    public function logOut(): void
    {
        echo "Facebook: '" . $this->username . "' has been logged out.\n";
    }
}