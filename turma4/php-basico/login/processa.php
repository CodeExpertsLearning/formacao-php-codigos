<?php
ini_set('display_errors', 1);
error_reporting(E_ALL|E_NOTICE|E_ERROR);

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', '');
define('DBNAME', 'formacao_nova');

require __DIR__ . '/functions/connection.php';
require __DIR__ . '/functions/password_hash.php';

$data = $_POST;

//Recupera usuário where email for igual a email 
//passado no form.
$sql = "SELECT * FROM users WHERE email = :email";

$conn = connection();

$get = $conn->prepare($sql);
$get->bindValue(':email', $data['email'], PDO::PARAM_STR);

$get->execute();

if(!$get->rowCount())
	die('Usuário ou senha incorretos!');

$user = $get->fetch(PDO::FETCH_ASSOC);

if(!passwordIsValid($data['password'], $user['password'])) {
	die('Usuário ou senha incorretos!');
}

session_start();

unset($user['password']);

$_SESSION['user'] = $user;

header('Location: dashboard.php');
