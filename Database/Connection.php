<?php

namespace Database;
use PDO;

class Connection
{
    private array $config = [];
    private static PDO $pdo;

    public function __construct()
    {
        $this->initConfig();
        $this->dbConnect();
    }

    public static function getConnection(): PDO
    {
        return self::$pdo;
    }

    private function initConfig(): void
    {
        $config = new Config();
        $this->config = $config->getConfig();

    }

    private function getDns(): string
    {
        return $this->config['driver'] .':host='. $this->config['host'] .';dbname='. $this->config['dbname'];

    }

    private function dbConnect(): void
    {
        $this::$pdo = new PDO($this->getDns() , $this->config['user'], $this->config['pass']);

    }
}
