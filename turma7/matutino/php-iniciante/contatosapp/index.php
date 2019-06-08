<?php 
require __DIR__ . '/bootstrap.php';

$baseLink = ltrim($_SERVER['REQUEST_URI'], '/');

$baseLink = explode('/', $baseLink);

if(count($baseLink) == 2) {
    $id = array_pop($baseLink);
    $uri = implode('/', $baseLink);

} else {
    $uri = $_SERVER['REQUEST_URI'];
}

if($uri == '/') {
    
    $contacts = $con->query('SELECT * FROM users');

    require TEMPLATES . 'home.phtml';
}

if($uri == 'edicao') {
    $contact = $con->prepare('
    SELECT * 
    FROM users WHERE id = :id');

    $contact->bindValue(':id', $id, PDO::PARAM_INT);
    $contact->execute();

    $contact = $contact->fetch(PDO::FETCH_ASSOC);
    
    require TEMPLATES . 'edit.phtml';
}

if($uri == 'atualizar') {
    $data = $_POST;

    if($data['password']) {
        $data['password'] = password_hash($data['password'], PASSWORD_ARGON2I);
    } else {
        unset($data['password']);
    }

    $sql = 'UPDATE users SET name = :name, email = :email';

    if(isset($data['password'])) $sql .= ', password = :password';

    $sql .= ' WHERE id = :id';
    
    $update = $con->prepare($sql);

    $update->bindValue(':id', $id, PDO::PARAM_INT);
    $update->bindValue(':name', $data['name'], PDO::PARAM_STR);
    $update->bindValue(':email', $data['email'], PDO::PARAM_STR);
    
    if(isset($data['password'])) {
        $update->bindValue(':password', $data['password'], PDO::PARAM_STR);
    }
    
    if(!$update->execute()) {
            die('Error ao atualizar usuário...');
    }

    return header('Location: /');

}

if($uri == '/criar') {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = $_POST;
        $data['password'] = password_hash($data['password'], PASSWORD_ARGON2I);
        //PASSWORD_BCRYPT
        
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