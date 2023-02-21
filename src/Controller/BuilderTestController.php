<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use App\Helpers\Builder\MysqlQueryBuilder;
use Symfony\Component\Routing\Annotation\Route;

class BuilderTestController
{
    #[Route('/app/builder_test', name: 'builder')]
    public function builderTest(): Response
    {
        $queryBuilder = new MysqlQueryBuilder();
        $query = $queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", 18, ">")
            ->where("age", 30, "<")
            ->limit(10, 20)
            ->getSQL();

        return new Response(
            '<html>
                      <body>
                        '.$query.'  
                      </body>
                    </html>'
        );
    }
}