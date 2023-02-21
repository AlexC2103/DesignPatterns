<?php

namespace App\Controller;

use App\Helpers\Facade\YouTube\YouTubeDownloader;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FacadeTestController
{
    #[Route('/app/facade_test', name: 'facade')]
    public function facadeTest(): Response {

        $facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
        $facade->downloadVideo("https://www.youtube.com/watch?v=QH2-TGUlwu4");

        return new Response ();
    }
}