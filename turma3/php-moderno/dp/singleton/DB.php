<?php 


class DB 
{
    private static $username = 'root';

    private static $password = '';

    private static $dbname = 'formacao_admin';

    private static $host = '127.0.0.1';

    private static $port = '';

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (! self::$instance)
            self::$instance = new \PDO('mysql:host='. self::$host . ';dbname='. self::$dbname . ';', self::$username, self::$password);

        return self::$instance;
    }
}