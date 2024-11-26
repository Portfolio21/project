<?php

namespace Controller;

class Main extends Init
{
    function index()
    {
        echo 'this is class ' . get_class($this);
    }
}
