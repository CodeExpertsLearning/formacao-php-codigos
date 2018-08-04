<?php

class Cart
{
    private $products = [];
    private $discount = 0;

    public function addProduct($product)
    {
    	$this->products[] = $product;
    }

    public function showCartProducts()
    {
    	return $this->products;
    }

    public function setDiscount($discount)
    {
    	$this->discount = $discount;
    }

    public function getTotal()
    {
    	$total = 0;
    	foreach($this->products as $p) {
			$total += $p->price;
	    }

	    if($this->discount)
	    	return $total - $this->discount;

    	return $total;
    }
}