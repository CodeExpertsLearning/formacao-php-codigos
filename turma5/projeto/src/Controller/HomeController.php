<?php
/**
 * Created by PhpStorm.
 * User: tommye
 * Date: 25/11/17
 * Time: 11:04
 */

namespace Code\Controller;

use Code\DB\Connection;
use Code\Entity\Product;
use Code\View;

class HomeController extends BaseController
{
	public function index()
	{
		$products = new Product(Connection::getInstance($this->getConfig('database')));

		$view = new View('home');

		$view->products = $products->findAll();

		return $view->render();
	}
}