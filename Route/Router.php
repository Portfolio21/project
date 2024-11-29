<?php

namespace Route;

class Router
{
    public function init($routes)
    {
        $url = substr($_SERVER['REQUEST_URI'], 1);

        if (!array_key_exists($url , $routes)) {
            $route = $routes['default'];
        } else {
            $route = $routes[$url];
        }

        $className = 'Controller\\' . $route['className'];
        $obj = new $className();
        $obj->{$route['method']}();
    }
}
