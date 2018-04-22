<?php
require __DIR__ . '/conn.php';

//require, include, include_once e require_once

$data = $_POST;

$sql  = "INSERT INTO users(
                name, 
                email, 
                created_at, 
                updated_at
                ) VALUES (
                    :name,
                    :email,
                    NOW(),
                    NOW()
                )";

$insert = $conn->prepare($sql);
$insert->bindValue(':name', $data['name'], PDO::PARAM_STR);
$insert->bindValue(':email', $data['email'], PDO::PARAM_STR);

if($insert->execute())
    print $conn->lastInsertId();

