<?php
namespace App\MVC;

class BaseController
{
    protected function getConnection()
    {
        $dsn = "mysql:dbname=formacao_admin;host=127.0.0.1";
        $user = 'root';
        $password = '';

        return new \PDO($dsn, $user, $password);
    }
}