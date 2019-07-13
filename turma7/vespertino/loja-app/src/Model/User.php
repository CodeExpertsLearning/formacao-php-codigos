<?php
namespace LojaApp\Model;

use LojaApp\MVC\Model;

class User extends Model
{
    public function createUser($data)
    {
        $sql = 'INSERT INTO users 
                VALUES(NULL, :name, :email, :password, NOW(), NOW())';

        $insert = $this->connection->prepare($sql);
        $insert->bindValue(':name', $data['name'], \PDO::PARAM_STR);
        $insert->bindValue(':email', $data['email'], \PDO::PARAM_STR);
        $insert->bindValue(':password', $data['password'], \PDO::PARAM_STR);

        if(!$insert->execute()) return false;

        return $this->getUserByEmail($data['email']);
    }

    public function getUserByEmail($email)
    {
        $sql = 'SELECT id, name, email, password FROM users WHERE email = :email';

        $select = $this->connection->prepare($sql);
        $select->bindValue(':email', $email, \PDO::PARAM_STR);

        $select->execute();

        return $select->fetch(\PDO::FETCH_OBJ);
    }
}