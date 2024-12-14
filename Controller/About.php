<?php

namespace Controller;

class About extends Init
{
    function index()
    {
        $fileName = 'about';

        $this->renderView($fileName);
    }
}

