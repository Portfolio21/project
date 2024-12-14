<?php

namespace Controller\Admin;

use Controller\Init;

class Gallery extends Init
{

    function index()
    {
        $fileName = 'admin/gallery';

        $this->renderView($fileName);
    }

}