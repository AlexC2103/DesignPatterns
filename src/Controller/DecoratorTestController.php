<?php

namespace App\Controller;

use App\Helpers\Decorator\ConcreteDecorators\DangrousHTMLTagsFilter;
use App\Helpers\Decorator\ConcreteDecorators\PlainTextFilter;
use App\Helpers\Decorator\InputFormat;
use App\Helpers\Decorator\TextInput;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DecoratorTestController
{
    private function displayCommentAsAWebsite(InputFormat $format, string $text): string
    {
        return $format->formatText($text);
    }

    #[Route('/app/decorator_test', name: 'decorator')]
    public function decoratorTest(): Response
    {
        $dangerousComment = <<< HERE
            Hello! Nice blog post!
            Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
            <script src="http://www.iwillhackyou.com/script.js">
              performXSSAttack();
            </script>
        HERE;

        $naiveInput = new TextInput();
        $filteredInput = new PlainTextFilter($naiveInput);

        return new Response (
            '<html>
                      <body>
                        <p>comments without filtering (unsafe): <br> </p>
                            '.$this->displayCommentAsAWebsite($naiveInput, $dangerousComment).' <br><br><br>
                        <p>filtered comment rendering (safe): <br> </p>
                            '.$this->displayCommentAsAWebsite($filteredInput, $dangerousComment).'
                      </body>
                    </html>'
        );
    }
}