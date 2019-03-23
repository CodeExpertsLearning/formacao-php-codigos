<?php
namespace Controller;

use Cart\Cart;
use Connection\Connection;
use Entity\Product;
use View\View;

class CartController
{
	public function index()
	{
		$products = new Cart();
		$productsSession = $products->showProducts();

		$products = [];
		$total    = 0;
		foreach($productsSession as $key => $p) {
			$products[$key] = current((new Product(Connection::getInstace()))
				->where(['slug' => $p]));

			$total += $products[$key]['price'];
		}

		return View::render('cart/index', compact('products', 'total'));
	}

	public function add($product = null)
	{
		$cart = new Cart();
		$cart->addProduct($product);

		return header('Location: ' . HOME . '/cart/index');
	}

	public function remove($product = null)
	{
		$cart = new Cart();
		$cart->removeProduct($product);

		return header('Location: ' . HOME . '/cart/index');
	}
}