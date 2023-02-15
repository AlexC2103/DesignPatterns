<?php

namespace App\Helpers\Decorator\ConcreteDecorators;

use App\Helpers\Decorator\TextFormat;

class DangrousHTMLTagsFilter extends TextFormat
{
    private $dangerousTagsPatterns = [
        "|<script.*?>([\s\S]*)?</script>|i"
    ];

    private $dangerousAttributes = [
        "onclick", "onkeypress"
    ];

    public function formatText(string $text): string
    {
        $text = parent::formatText($text);

        foreach ($this->dangerousTagsPatterns as $pattern) {
            $text = preg_replace($pattern, '', $text);
        }

        foreach ($this->dangerousAttributes as $attribute) {
            $text = preg_replace_callback('|<(.*?)>|', function ($matches) use ($attribute) {
                $result = preg_replace("|$attribute=|i", '', $matches[1]);
                return "<" . $result . ">";
            }, $text);
        }

        return $text;
    }
}