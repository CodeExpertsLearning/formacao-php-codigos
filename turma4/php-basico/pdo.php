<?php
ini_set('display_errors', 1);
error_reporting(E_ALL|E_NOTICE|E_ERROR);

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', '');
define('DBNAME', 'formacao_nova');

$dsn = 'mysql:host=' . HOST . ';dbname=' . DBNAME;

$conn = new PDO($dsn, USER, PASSWORD);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$data = array(
	'name' => 'Teste 2',
	'email' => 'test2@gmail.com',
	'password' => '123456'
	);

require __DIR__ . '/functions/password_hash.php';

$password = generate($data['password']);

$sql = "INSERT INTO users(name, email, password, created_at, updated_at) VALUES(:name, :email, :password, now(), now())";

$insert = $conn->prepare($sql);

$insert->bindValue(':name', $data['name'], PDO::PARAM_STR);

$insert->bindValue(':email', $data['email'], PDO::PARAM_STR);

$insert->bindValue(':password', $password, PDO::PARAM_STR);

if(!$insert->execute()) {
	die('Erro ao inserir usuário');
}

print $conn->lastInsertId();





