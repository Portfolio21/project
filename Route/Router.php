<?php

namespace Route;

class Router
{
    public function init($routes)
    {
        $url = substr($_SERVER['PATH_INFO'] ?? '', 1);

        if (!array_key_exists($url , $routes)) {
            $route = $routes['default'];
            $parameter = null;
        } else {
            $route = $routes[$url];
            $parameter = $_GET[$route['parameter'] ?? null] ?? null;
        }

        $className = 'Controller\\' . $route['className'];

        $obj = new $className();

        if ($parameter == null) {
            $obj->{$route['method']}();
        } else {
            $obj->{$route['method']}($parameter);
        }
    }
}
