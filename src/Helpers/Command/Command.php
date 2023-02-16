<?php

namespace App\Helpers\Command;

interface Command
{
    public function execute(): void;
}