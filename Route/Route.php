<?php

namespace Route;

class Route
{
    function getRoutes()
    {
        return [
            '' => ['className' => 'Main', 'method' => 'index'],
            'about' => ['className' => 'About', 'method' => 'index'],
            'gallery' => ['className' => 'Gallery', 'method' => 'index'],
            'default' => ['className' => 'Class404', 'method' => 'index'],
        ];
    }
}
