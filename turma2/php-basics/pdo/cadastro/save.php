<?php 
ini_set("display_errors", 1);

require __DIR__ . '/pdo.php';

$data = $_POST;

$sql = 'INSERT INTO products(name, price) values(:name, :price)';

$insert = $pdo->prepare($sql);

$insert->bindValue(':name', $data['name'], PDO::PARAM_STR);
$insert->bindValue(':price', $data['price'], PDO::PARAM_STR);

if($insert->execute()) {
	$id =  $pdo->lastInsertId();

	// $sql = "SELECT id, name, price FROM products WHERE id = :id";

	// $get = $pdo->prepare($sql);

	// $get->bindValue(":id", $id, PDO::PARAM_INT);

	// $get->execute();

	// var_dump($get->fetchAll());
	session_start();
	$_SESSION['msg'] = "Produto inserido com sucesso!";
	header("Location: http://localhost:3031/cadastro");
}