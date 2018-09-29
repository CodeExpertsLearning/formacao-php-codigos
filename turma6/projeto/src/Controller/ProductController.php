<?php
namespace Controller;

use Connection\Connection;
use Entity\Product;
use View\View;

class ProductController
{
	public function view(int $id = null)
	{
		try {
			$product = (new Product(Connection::getInstace()))->find($id);
			return View::render('products/single', compact('product'));
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}
}