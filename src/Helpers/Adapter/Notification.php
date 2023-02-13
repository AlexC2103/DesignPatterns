<?php

namespace App\Helpers\Adapter;

interface Notification
{
    public function send(string $title, string $message);
}