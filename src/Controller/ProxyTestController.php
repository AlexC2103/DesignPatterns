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
        $subject->download("http://example.com/");
        $subject->download("http://example.com/");
    }

    public function proxyTest(): Response {

        echo " EXECUTING CLIENT CODE WITH REAL SUBJECT: ";
        $realSubject = new SimpleDownloader();
        $this->clientcode($realSubject);

        echo " EXECUTING THE SAME CLIENT CODE WITH A PROXY ";
        $proxy = new CachingDownloader($realSubject);
        $this->clientCode($proxy);
        return new Response(

        );
    }
}