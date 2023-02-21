<?php

namespace App\Controller;

use App\Helpers\Strategy\Navigator;
use App\Helpers\Strategy\Strategies\PublicTransportStrategy;
use App\Helpers\Strategy\Strategies\RoadStrategy;
use App\Helpers\Strategy\Strategies\WalkingStrategy;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StrategyTestController
{
    #[Route('/app/strategy_test/{strategy}', name: 'strategy')]
    public function strategyTest($strategy): Response
    {
        switch ($strategy) {
            case 'car':
                $transportMethod = new RoadStrategy();
                break;
            case 'publicTransport':
                $transportMethod = new PublicTransportStrategy();
                break;
            case 'walk':
                $transportMethod = new WalkingStrategy();
                break;
            default:
                return new Response(
                    '<html>
                <body style="color:green">
                  <br>
                    <h3>' . 'Specified transportation method not found' . '</h3>
                </body>
              </html>'
                , 401);
        }

        $navigator = new Navigator($transportMethod);

        $message = $navigator->showRoute();

        return new Response(
            '<html>
                <body style="color:green">
                  <br>
                    <h3>' . $message . '</h3>
                </body>
              </html>'
        );
    }
}