<?php

namespace Route;

class Route
{
    function getRoutes()
    {
        return [
            '' => ['className' => 'Main', 'method' => 'index'],
            'gallery/list' => ['className' => 'Gallery', 'method' => 'index'],
            'gallery/create' => ['className' => 'Gallery', 'method' => 'create'],
            'gallery/update' => ['className' => 'Gallery', 'method' => 'update', 'parameter' => 'id'],
            'gallery/delete' => ['className' => 'Gallery', 'method' => 'delete', 'parameter' => 'id'],
            'about' => ['className' => 'About', 'method' => 'index'],
            'admin/post/list' => ['className' => 'Admin\Posts', 'method' => 'index'],
            'admin/post/create' => ['className' => 'Admin\Posts', 'method' => 'create', 'parameter' => 'all'],
            'admin/post/update' => ['className' => 'Admin\Posts', 'method' => 'update', 'parameter' => 'id'],
            'admin/post/delete' => ['className' => 'Admin\Posts', 'method' => 'delete', 'parameter' => 'id'],
            'admin/user/list' => ['className' => 'Admin\Users', 'method' => 'index'],
            'admin/user/create' => ['className' => 'Admin\Users', 'method' => 'create', 'parameter' => 'all'],
            'admin/user/update' => ['className' => 'Admin\Users', 'method' => 'update', 'parameter' => 'id'],
            'admin/user/delete' => ['className' => 'Admin\Users', 'method' => 'delete', 'parameter' => 'id'],
            'admin/gallery/list' => ['className' => 'Admin\Gallery', 'method' => 'index'],
            'admin/gallery/create' => ['className' => 'Admin\Gallery', 'method' => 'create', 'parameter' => 'all'],
            'admin/gallery/update' => ['className' => 'Admin\Gallery', 'method' => 'update', 'parameter' => 'id'],
            'admin/gallery/delete' => ['className' => 'Admin\Gallery', 'method' => 'delete', 'parameter' => 'id'],
            'admin/user' => ['className' => 'Admin\Users', 'method' => 'index'],
            'admin/gallery' => ['className' => 'Admin\Gallery', 'method' => 'index'],
            'default' => ['className' => 'Class404', 'method' => 'index'],
        ];
    }
}
