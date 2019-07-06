<?php
namespace LojaApp\Database;

class Connection
{
    private static $instance;

    private function __construct(){}

    public static function getInstance()
    {
        if(!self::$instance) {
            $connector  = 'mysql:dbname='. DB_NAME;
            $connector .= ';host=' . DB_HOST;

            self::$instance = new \PDO(
                $connector, 
                DB_USER,
                DB_PASSWORD);

            self::$instance->setAttribute(
                \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            self::$instance->exec('SET NAMES UTF8;');
        }

        return self::$instance;
    }
}