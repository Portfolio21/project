<?php

namespace Controller;

class Main extends Init
{
    function index()
    {
        $fileName = 'main';

        $this->renderView($fileName);
    }
}
