<?php 
session_start();

$data = $_POST;

require __DIR__ . '/../../form/conn.php';

$secret = "XahsjsAAA374745SSDD";

$sql = "SELECT * FROM users WHERE email = :email";

$select = $conn->prepare($sql);
$select->bindValue(':email', $data['email']);

if(!$select->execute())
    die("Erro ao processar!");

if(!$select->rowCount())
    die("Usuário ou senha incorretos!");

$user = $select->fetch(PDO::FETCH_ASSOC);

if($user['password'] != sha1($data['password'] . $secret))
    die("Usuário ou senha incorretos!");

unset($user['password']);

$_SESSION['user'] = $user;

header('Location: /session_cookies/login/admin.php');