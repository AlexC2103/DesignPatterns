<?php

namespace App\Helpers\Facade\FFMpeg;

class FFMpeg
{
    public static function create(): FFMpeg
    {
        return new FFMpeg;
    }

    public function open(string $video): void { }
}