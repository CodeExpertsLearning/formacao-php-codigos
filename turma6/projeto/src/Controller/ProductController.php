<?php
namespace Controller;

use Connection\Connection;
use Entity\Product;
use View\View;

class ProductController
{
	public function view(string $slug = null)
	{
		try {
			$product = current((new Product(Connection::getInstace()))
						->where(['slug' => $slug]));

			return View::render('products/single', compact('product'));

		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}
}