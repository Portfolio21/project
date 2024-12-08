<?php

namespace Controller;

class Init
{
    public function renderView($fileName, $data = [])
    {
        include __DIR__ . '/../View/html.php';
    }
}
