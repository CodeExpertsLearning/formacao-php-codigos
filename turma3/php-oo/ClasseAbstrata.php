<?php

abstract class Connection
{
    public function conn()
    {
        return "Connected";
    }

    abstract function getConnection();
}

class DB extends Connection
{
    public function getConnection()
    {
       print $this->conn();
    }

}

$db = new DB();

$db->getConnection();