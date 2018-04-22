<?php 
namespace CodeExperts\App\Controller;

use CodeExperts\App\Model\Checkout;
use CodeExperts\App\Model\Product;
use CodeExperts\Entity\Connection;
use Symfony\Component\HttpFoundation\Session\Session;
use PHPSC\PagSeguro\Items\Item;

class CheckoutController 
{
	public function index()
	{
		$checkout = new Checkout();
		$products = new Session();

		foreach($products->all()['products'] as $key => $p){
				$product = (new Product(new Connection()))->where(['slug' => $p],'name, price, slug', 'AND', 'one');
				$checkout->setItem(new Item($products->getId(), $product['name'], $product['price']));
		}

		header('Location: ' . $checkout->checkout());
	}	
}