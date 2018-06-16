<?php
//CRUD - CREATE, READ, UPDATE & DELETE
require __DIR__ . '/connection.php';

function select($pdo, $table, $fields = '*')
{
	$sql = "SELECT $fields FROM $table";

	$result = $pdo->query($sql);

	return $result->fetchAll(PDO::FETCH_ASSOC);
}

function where($pdo, $conditions)
{
	$sql = "SELECT * FROM usuarios WHERE ";
	$binds = array_keys($conditions);

	$where = '';

	foreach($binds as $b) {
		$where .= !$where ? $b . ' = :' . $b
						  : ' AND ' . $b . ' = :' . $b;
	}

	$sql .= $where;

	$select = $pdo->prepare($sql);

	foreach($conditions as $k => $v) {
		$type = gettype($v) == 'string' ? \PDO::PARAM_STR
			                             : \PDO::PARAM_INT;

		$select->bindValue(':' . $k, $v, $type);
	}

	$select->execute();
	return $select->fetchAll(\PDO::FETCH_ASSOC);
}

function find($pdo, $id)
{
	return current(where($pdo, ['id' => $id]));
}

function insert($pdo, $data)
{
  $sql = "
        INSERT INTO usuarios 
        VALUES (NULL, :nome, :email, :telefone, NOW(), NOW())
  ";

  $insert = $pdo->prepare($sql);
  $insert->bindValue(':nome', $data['nome'], PDO::PARAM_STR);
  $insert->bindValue(':email', $data['email'], PDO::PARAM_STR);
  $insert->bindValue(':telefone', $data['telefone'], PDO::PARAM_STR);

  $insert->execute();

  return $pdo->lastInsertId();
}

function update($pdo, $data)
{
	$sql = "UPDATE usuarios 
			SET ";
	$binds = array_keys($data);

	$set = '';
	foreach($binds as $b) {
		if($b != 'user_id') {
			$set .= !$set ? $b . ' = :' . $b
				           : ', ' . $b . ' = :' . $b;
		}
	}

	$sql .= $set . " WHERE id = :user_id";

	$update = $pdo->prepare($sql);

	foreach($data as $k => $v) {
		$type = gettype($v) == 'string' ? \PDO::PARAM_STR
			: \PDO::PARAM_INT;

		$update->bindValue(':' . $k, $v, $type);
	}

	return $update->execute();
}

function delete($pdo, $id)
{
	$sql = "DELETE FROM usuarios WHERE id = :id";

	$delete = $pdo->prepare($sql);
	$delete->bindValue(':id', $id, PDO::PARAM_STR);

	return $delete->execute();
}
