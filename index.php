<?php

use Controllers\IndexController;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Cfg\Router;

include_once __DIR__ . "/Cfg/Router.php";

try {
    echo (new Router)->response();
} catch (HttpRouteNotFoundException $e) {
    echo (new IndexController)->getError();
}
