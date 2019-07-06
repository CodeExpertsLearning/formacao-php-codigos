<?php
namespace LojaApp\Model;

use LojaApp\MVC\Model;

class Product extends Model
{
    protected $table = 'products';

    public function findAll()
    {
        $sql = "SELECT * FROM " . $this->table;

        $products = $this->connection->query($sql);

        if(!$products->rowCount()) {
            throw new \Exception('Products not found!');
        }

        return $products->fetchAll(\PDO::FETCH_OBJ);
    }

    public function find($parameter)
    {
        $sql = "SELECT * FROM " . $this->table . ' WHERE slug = :slug';

        $products = $this->connection->prepare($sql);
        $products->bindValue(':slug',  $parameter, \PDO::PARAM_STR);

        if(!$products->execute()) {
            throw new \Exception('Product not found!');
        }

        return $products->fetch(\PDO::FETCH_OBJ);
    }
}