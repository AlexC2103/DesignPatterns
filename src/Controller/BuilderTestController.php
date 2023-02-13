<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use App\Helpers\Builder\MysqlQueryBuilder;

class BuilderTestController
{
    function builderTest(): Response
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