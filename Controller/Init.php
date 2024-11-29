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
}
