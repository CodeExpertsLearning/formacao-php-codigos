<?php
namespace LojaApp\MVC;

class Model
{
    protected $connection;
    protected $table;
    
    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

}