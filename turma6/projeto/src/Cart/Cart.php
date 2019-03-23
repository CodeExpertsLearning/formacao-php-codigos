<?php
namespace Cart;

use Session\Session;

class Cart
{
	public function showProducts()
	{
		$products = Session::get('products');

         if(!$products)
         	return [];

         return $products;
	}

	public function addProduct($product)
	{
		$products = Session::get('products');

		if(!$products) {
			$products = [$product];
		} else {
			array_push($products, $product);
		}

		Session::set('products', $products);
	}

	public function removeProduct($slug)
	{
		$products = Session::get('products');

		if(!$products)
			return false;

		$products = array_filter($products, function($p) use($slug){
			return $p != $slug;
		});

		Session::set('products', $products);

		return true;
	}
}