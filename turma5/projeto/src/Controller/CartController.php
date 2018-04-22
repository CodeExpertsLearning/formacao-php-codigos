<?php
namespace Code\Controller;

use Code\DB\Connection;
use Code\Entity\Product;
use Code\View;
use Code\Service\CartService;
use Code\Service\SessionService;

class CartController extends BaseController
{
	private $cart;
	private $session;

	public function __construct()
	{
		$this->session = new SessionService();
		$this->cart = new CartService($this->session);
	}

	public function index()
	{
		$view = new View('cart');

		$view->products = isset($_SESSION['products']) ? $_SESSION['products'] : [];

		if($view->products) {
			$products = [];
			$products['total'] = 0;

			foreach($view->products as $key => $p){

				$products['products'][$key] = (new Product(Connection::getInstance($this->getConfig('database'))))
					->where(['slug' => $p]);

				$products['total'] = $products['total'] + $products['products'][$key]['price'];
			}

			$view->products = $products;
		}

		return $view->render();
	}

	public function add($slug)
	{
		$this->cart->add($slug);

		header('Location:'. HOME . 'produto/' . $slug);
	}

	public function remove($slug)
	{
		$this->cart->remove($slug);

		header('Location:'. HOME . 'cart');
	}
}