<?php 

function __autoload($class)
{
	 require __DIR__ . '/' . $class . '.php';
}

$conn = (new Connection())->getConnection();

$product = new Product($conn);

// $product->name = "Produto OO";
// $product->price = 19.90;
// $product->description = "Produto OO Desc";
// $product->slug = 'ok-ok-ok';
// $product->thumb = 'ok.exe';

// print $product->save();