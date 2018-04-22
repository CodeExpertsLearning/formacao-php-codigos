<?php 

define("DBNAME", "formacao");
define("HOST", "127.0.0.1");
define("USER", "root");
define("PASS", "123456");

$connector = 'mysql:dbname=' . DBNAME . ';host=' . HOST;

$pdo = new PDO($connector, USER, PASS);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
