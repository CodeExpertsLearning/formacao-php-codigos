<?php

$name = "Teste de Produto";
$description = "Testando descrição do produto";
$price = 20.90;

require __DIR__ . '/connection.php';

$sql = "INSERT INTO products(
                        name,
                        description,
                        price,
                        created_at,
                        updated_at)
                    VALUE(
                        :name,
                        :description,
                        :price,
                        now(),
                        now()
                    )";

$create = $pdo->prepare($sql);

$create->bindValue(":name", $name, PDO::PARAM_STR);
$create->bindValue(":description", $description, PDO::PARAM_STR);
$create->bindValue(":price", $price, PDO::PARAM_STR);

$create->execute();

print $pdo->lastInsertId();