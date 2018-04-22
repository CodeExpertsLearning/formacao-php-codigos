<?php

$name = "Teste de Produto";
$description = "Testando descrição do produto";
$price = 20.90;

require __DIR__ . '/connection.php';

$sql = "SELECT * FROM products WHERE id = :id";

$products = $pdo->prepare($sql);

$products->bindValue(":id", 4, PDO::PARAM_INT);

$products->execute();

foreach($products->fetchAll(PDO::FETCH_ASSOC) as $product) {
	print '<h1>' . $product['name'] . '</h1>';
	print '<p>'  . $product['description'] . '</p>';
	print '<p>R$ '  . number_format($product['price'], "2", ",", ".") . '</p>';
	$date = date("d/m/Y H:i:s", strtotime($product['created_at']));
	print '<small>' . $date . '</small>';
}