<?php 
$user = 'root';
$password = '';
$dsn = 'mysql:dbname=formacao;host=localhost';

$conn = new PDO($dsn, $user, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// PDO (PHP Data Object): Abstrai conexões com banco de dados. 
// Você pode conectar N bancos com o php, por meio do PDO. 

//Prepared Statements: Ele faz os binds dos valores, e converte os valores 
//passados para o tipo especificado.