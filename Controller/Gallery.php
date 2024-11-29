<?php

namespace Controller;

class Gallery extends Init
{
    function index()
    {
        $fileName = 'gallery';

        $this->renderView($fileName);
    }
}
