<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Core\Plugin;

Router::plugin('Admin', ['path' => '/admin'],
    function (RouteBuilder $routes) {
        $routes->extensions('json');
        $routes->resources('Users');
        $routes->fallbacks('DashedRoute');
 });


