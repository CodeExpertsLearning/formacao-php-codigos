<?php

class Product
{
	public $name;
	public $price;

	public function setName($name)
	{
		$this->name = $name;
	}

	private function getName()
	{
		return $this->name;
	}
}

class OtherProduct extends Product
{
	public function otherName()
	{
		return $this->getName();
	}
}

$prod = new OtherProduct();

$prod->setName('Test');

print $prod->otherName();

// var_dump($prod);

