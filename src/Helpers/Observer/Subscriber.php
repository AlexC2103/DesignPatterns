<?php

namespace App\Helpers\Observer;

interface Subscriber
{
    public function __construct(string $name, string $email);
    public function getName(): string;
    public function getEmail(): string;
    public function update(string $event): void;
}