<?php
namespace Code\Controller;

use Code\Entity\UserOrder;
use Code\Service\PagSeguroService;
use Code\Service\SessionService;
use Code\Entity\Product;
use Code\DB\Connection;
use PHPSC\PagSeguro\Items\Item;

class CheckoutController extends BaseController
{
	public function index()
	{
		$checkout = new PagSeguroService();

		SessionService::sessionStart();
		$products = isset($_SESSION['products']) ? $_SESSION['products'] : [];

		foreach($products as $key => $p){
			$product = (new Product(Connection::getInstance(
				$this->getConfig('database')
			)))
			->where(['slug' => $p]);
			$checkout->setItem(new Item($product['id'], $product['name'], $product['price']));
		}

		$checkout = $checkout->checkout();

		$userOrder = new UserOrder(Connection::getInstance($this->getConfig('database')));

		$userOrder->user_id = $_SESSION['user']['id'];
		$userOrder->pagseguro_code = $checkout->getCode();
		$userOrder->pagseguro_status = 1;
		$userOrder->items = serialize($products);
		$userOrder->insert();

		session_destroy();

		header('Location: ' . $checkout->getRedirectionUrl());
	}
}