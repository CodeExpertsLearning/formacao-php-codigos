<?php
namespace Controller;

use Connection\Connection;
use Entity\Product;
use View\View;

class HomeController
{
	public function index()
	{
		try {
			$products = (new Product(Connection::getInstace()))->getAll();
			return View::render('products/index', compact('products'));
		}catch(\Exception $e) {
			return $e->getMessage();
		}
	}
}