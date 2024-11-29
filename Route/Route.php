<?php

namespace Route;

class Route
{
    function getRoutes()
    {
        return [
            'admin/' => ['className' => 'Main', 'method' => 'index'],
            'admin/about' => ['className' => 'About', 'method' => 'index'],
            'admin/gallery' => ['className' => 'Gallery', 'method' => 'index'],
            'default' => ['className' => 'Class404', 'method' => 'index'],
        ];
    }
}
