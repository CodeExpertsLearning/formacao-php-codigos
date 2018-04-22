<?php 

require __DIR__ . '/DB.php';


$db = DB::getInstance();
$db2 = DB::getInstance();
$db3 = DB::getInstance();

// $db = $db->query('SELECT * FROM products');

// var_dump($db->fetchAll());

print $db == $db2 && $db2 == $db3 ? 'Mesma instância!' : 'Não é a mesma instância!';