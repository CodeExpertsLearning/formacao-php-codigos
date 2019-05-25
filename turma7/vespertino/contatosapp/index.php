<?php
require __DIR__ . '/bootstrap.php';

$uri = $_SERVER['REQUEST_URI'];

if($uri == '/') {
   $users = $con->query('SELECT * FROM users');
   $users = $users->fetchAll(PDO::FETCH_ASSOC);

   require TEMPLATES . '/home.phtml';
}

if($uri == '/criar') {
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = $_POST;
        $data['password']
             = password_hash($data['password'], PASSWORD_ARGON2I);
        
        $sql = 'INSERT INTO users
                 (name, email, password, created_at, updated_at)
                 VALUES(:name, :email, :password, NOW(), NOW())';

        //Prepared Statements    
        $insert = $con->prepare($sql);
        $insert->bindValue(':name', $data['name'], PDO::PARAM_STR);
        $insert->bindValue(':email', $data['email'], PDO::PARAM_STR);
        $insert->bindValue(':password', $data['password'], PDO::PARAM_STR);
        
        if(!$insert->execute()){
            die('Erro ao inserir dado no banco...');
        }

        return header('Location: /');
    }

    require TEMPLATES . '/create.phtml';
}
