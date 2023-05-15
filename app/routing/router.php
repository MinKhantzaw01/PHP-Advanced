<?php

use App\Routing\RouteDispatcher;
$router= new AltoRouter();

$router->setBasePath("/E-commerce/public");

$router->map("GET","/","App\Controllers\IndexController@show","Home Route");

new RouteDispatcher($router);
?>