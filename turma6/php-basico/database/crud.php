<?php
//CRUD - CREATE, READ, UPDATE & DELETE
require __DIR__ . '/connection.php';

function select($pdo)
{
	$sql = "SELECT * FROM usuarios";

	//PDO - PHP Data Object - Abstrai Conexão
	$result = $pdo->query($sql);

	return $result->fetchAll(PDO::FETCH_ASSOC);
}

function insert($pdo, $data)
{
  $sql = "
        INSERT INTO usuarios 
        VALUES (NULL, :nome, :email, :telefone, NOW(), NOW())
  ";

  //Prepared Statements
  $insert = $pdo->prepare($sql);
  $insert->bindValue(':nome', $data['nome'], PDO::PARAM_STR);
  $insert->bindValue(':email', $data['email'], PDO::PARAM_STR);
  $insert->bindValue(':telefone', $data['telefone'], PDO::PARAM_STR);

  $insert->execute();

  return $pdo->lastInsertId();
}
