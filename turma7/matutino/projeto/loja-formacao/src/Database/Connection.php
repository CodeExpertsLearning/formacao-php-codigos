<?php
namespace LojaApp\Database;

class Connection
{
    private static $instance;

    private function __construct(){}

    public static function getInstance()
    {
        if(!self::$instance) {
            $connector = 'mysql:dbname=' . DB_NAME . ';host='. DB_HOST;

            self::$instance = new \PDO($connector, DB_USER, DB_PASSWORD);
            self::$instance->exec('SET NAMES ' . DB_CHARSET . ';');
        }

        return self::$instance;
    }
}