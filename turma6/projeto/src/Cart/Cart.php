<?php
namespace Cart;

use Entity\Product;
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

	public function addProduct(ProductItem $product)
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
			return $p->slug != $slug;
		});

		Session::set('products', $products);

		return true;
	}
}