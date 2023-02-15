<?php

namespace App\Controller;

use App\Helpers\Proxy\CachingDownloader;
use App\Helpers\Proxy\Downloader;
use App\Helpers\Proxy\SimpleDownloader;
use Symfony\Component\HttpFoundation\Response;

class ProxyTestController
{
    private function clientCode(Downloader $subject)
    {
        $result = $subject->download("http://example.com/");
        $result = $subject->download("http://example.com/");
    }

    public function proxyTest(): Response {
        echo " Executing client code with real subject: ";
        $realSubject = new SimpleDownloader();
        $this->clientcode($realSubject);

        echo " Executing the same client code with a proxy ";
        $proxy = new CachingDownloader($realSubject);
        $this->clientCode($proxy);
        return new Response(

        );
    }
}