<?php
namespace LojaApp\Model;

use LojaApp\MVC\Model;

class Product extends Model
{
    protected $table = 'products';

    public function findAll()
    {
        $sql = 'SELECT * FROM ' . $this->table;
        
        $products = $this->connection->query($sql);

        return $products->fetchAll(\PDO::FETCH_OBJ);
    }

    public function find($slug)
    {
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE slug = :slug';

        $product = $this->connection->prepare($sql);
        $product->bindValue(':slug', $slug, \PDO::PARAM_STR);

        $product->execute();

        return $product->fetch(\PDO::FETCH_OBJ);
    }
}