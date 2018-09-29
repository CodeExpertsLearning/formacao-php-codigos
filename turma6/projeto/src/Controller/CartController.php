<?php
namespace Controller;

use Cart\Cart;
use View\View;

class CartController
{
	public function index()
	{
		$products = new Cart();
		$products = $products->showProducts();

		return View::render('cart/index', compact('products'));
	}

	public function add($product = null)
	{
		$cart = new Cart();
		$cart->addProduct($product);
		die('Produto adicionado');
	}

	public function remove($product = null)
	{
		$cart = new Cart();
		$cart->removeProduct($product);
	}
}