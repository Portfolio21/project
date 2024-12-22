<?php

namespace Database;

class Config
{
    public function getConfig()
    {
        return [
            'driver' => 'mysql',
            'dbname' => 'test',
            'host' => 'localhost',
            'user' => 'root',
            'pass' => 'root',
        ];
    }
}
