<?php
namespace CodeExperts\Db;

class Connection
{
    private function __construct(){}

    public static function getCon()
    {
        return new \PDO(
            "mysql:dbname=formacao_admin;host=127.0.0.1",
            "root",
            ""
        );
    }
}