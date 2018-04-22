<?php

interface IProduct
{
	public function setName();
}

class Product implements IProduct
{
	public function setName()
	{
		print __METHOD__;
	}
}


class OtherProduct implements IProduct
{
	public function setName()
	{
		print __METHOD__;
	}
}


class Client
{
	public function showSomenthing(IProduct $product)
	{
		return $product->setName();
	}
}

$prod1 = new OtherProduct();


$p = new Client();

print $p->showSomenthing($prod1);






