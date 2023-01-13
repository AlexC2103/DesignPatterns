<?php

namespace App\Helpers\Observer;

use App\Helpers\EventManager;

class User implements Subscriber
{
    private $name, $email;
    public $attributes = [];

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function sendEmail(string $data): void
    {
        $this->attributes = array_merge($this->attributes, [$data]);
    }
}

