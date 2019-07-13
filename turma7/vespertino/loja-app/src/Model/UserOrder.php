<?php
namespace LojaApp\Model;

use LojaApp\MVC\Model;

class UserOrder extends Model
{
    public function createOrder($data)
    {
        $sql = 'INSERT INTO user_orders
                VALUES(NULL, :user_id, :items, :pagseguro_code, 
                :pagseguro_status, NOW(), NOW())';

        $insertOrder = $this->connection->prepare($sql);

        $insertOrder->bindValue(':user_id', $data['user_id'], \PDO::PARAM_INT);
        $insertOrder->bindValue(':items', $data['items'], \PDO::PARAM_STR);
        $insertOrder->bindValue(':pagseguro_code', $data['pagseguro_code'], \PDO::PARAM_STR);
        $insertOrder->bindValue(':pagseguro_status', $data['pagseguro_status'], \PDO::PARAM_INT);

        if(!$insertOrder->execute()) return false;

        return $this->connection->lastInsertId();
    }
}
