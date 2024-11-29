<?php

namespace Controller;

class Init
{
    public function __call($name, $arguments) {
        if (method_exists($this, $name)) {
            $this->$name();
        } else {
            (new Class404())->index();
        }
    }

    public function renderView($fileName)
    {
        include __DIR__ . '/../View/html.php';
    }
}
