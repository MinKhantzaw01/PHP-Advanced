<?php

use App\Routing\RouteDispatcher;
$router= new AltoRouter();

$router->setBasePath("/E-commerce/public");

$router->map("GET","/","App\Controllers\IndexController@show","Home Route");

$router->map("GET","/admin","App\Controllers\AdminController@index","Admin Home");
$router->map("GET","/admin/category/create","App\Controllers\CategoryController@index","Category Create");
$router->map("POST","/admin/category/create","App\Controllers\CategoryController@store","Category Store");

new RouteDispatcher($router);
?>