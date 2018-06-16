<?php
//pasta: database/ -> connection.php
#PDO
$dsn = 'mysql:host=127.0.0.1;dbname=formacao_6';
$user = 'root';
$password = '';

$conn = new PDO($dsn, $user, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);