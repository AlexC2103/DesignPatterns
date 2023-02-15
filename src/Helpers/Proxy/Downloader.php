<?php

namespace App\Helpers\Proxy;

interface Downloader
{
    public function download(string $url): string;
}