<?php

use Slim\Routing\RouteCollectorProxy;

$app->group('/api',function(RouteCollectorProxy $group){
    $group->get('/citas','App\Controllers\CitasController:getAll');
});