<?php 

$dsn = "mysql:dbname=formacao_php;host=127.0.0.1";
$user = "root";
$password = "123456";

$pdo = new PDO($dsn, $user, $password);

$sql = "SELECT id, name, price FROM products ORDER BY id DESC LIMIT 1";

$get = $pdo->query($sql);

var_dump($get->fetchAll());