<?php

namespace App\Controller;

use App\Helpers\Facade\YouTube\YouTubeDownloader;
use Symfony\Component\HttpFoundation\Response;

class FacadeTestController
{
    public function facadeTest(): Response {

        $facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
        $facade->downloadVideo("https://www.youtube.com/watch?v=QH2-TGUlwu4");

        return new Response (

        );
    }
}