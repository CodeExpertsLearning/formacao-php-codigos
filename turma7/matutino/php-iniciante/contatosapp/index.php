<?php 
require __DIR__ . '/bootstrap.php';

$uri = $_SERVER['REQUEST_URI'];

if($uri == '/') {
    
    $contacts = $con->query('SELECT * FROM users');

    require TEMPLATES . 'home.phtml';
}

if($uri == '/edicao/10') {

    require TEMPLATES . 'edit.phtml';
}

if($uri == '/criar') {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = $_POST;
        
        $sql = "INSERT INTO users(
                name, email, password, created_at, updated_at)
                VALUES(:name, :email, :password, NOW(), NOW())";
       //Prepared Statements 
        $insert = $con->prepare($sql);
        $insert->bindValue(':name', $data['name'], PDO::PARAM_STR);
        $insert->bindValue(':email', $data['email'], PDO::PARAM_STR);
        $insert->bindValue(':password', $data['password'], PDO::PARAM_STR);

        if(!$insert->execute()) {
            die('Error ao inserir usuário...');
        }

        return header('Location: /');
    }

    require TEMPLATES . 'create.phtml';
}