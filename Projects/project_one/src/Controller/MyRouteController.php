<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MyRouteController {

    public function myroute() 
    {
        return new Response("<h1>My new route!!</h1>");
    }
}