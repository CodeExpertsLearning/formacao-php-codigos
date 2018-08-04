<?php

require __DIR__ . '/Cart.php';
require __DIR__ . '/Product.php';

$product1 = new Product();
$product1->id = 1;
$product1->name = 'Macbook Pro 13 2018';
$product1->price = 1.0;


$product2 = new Product();
$product2->id = 2;
$product2->name = 'Go pro';
$product2->price = 2.0;


$product3 = new Product();
$product3->id = 2;
$product3->name = 'iPhone X';
$product3->price = 5.0;

$cart = new Cart();
$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product3);

$cart->setDiscount(1.5);

foreach($cart->showCartProducts() as $product)
{
	print $product->name . ' - R$ ' . number_format($product->price, 2, ',', '.') . PHP_EOL;
}
print '===============================' . PHP_EOL;
print 'Total: R$ ' . number_format($cart->getTotal(), 2, ',', '.');