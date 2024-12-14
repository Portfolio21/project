<?php

namespace Controller\Admin;

use Controller\Init;

class Users extends Init
{

    function index()
    {
        $fileName = 'admin/user';

        $this->renderView($fileName);
    }

}