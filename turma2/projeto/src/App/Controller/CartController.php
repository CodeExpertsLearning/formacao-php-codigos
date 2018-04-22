<?php 
namespace CodeExperts\App\Controller;

use CodeExperts\App\View;
use CodeExperts\App\Model\Product;
use CodeExperts\Entity\Connection;
use Symfony\Component\HttpFoundation\Session\Session;
use CodeExperts\App\Model\Cart;

class CartController 
{
	private $cart;
	private $session;

	public function __construct()
	{	
		$this->session = new Session();

		$this->cart = new Cart($this->session);
	}

	public function index()
	{
		$view = new View(APP_VIEWS . 'cart.phtml');

		$view->products = $this->cart->all();

	    if($view->products) {
	    	$products = [];
		    $products['total'] = 0;

			foreach($view->products['products'] as $key => $p){
				$products['products'][$key] = (new Product(new Connection()))->where(['slug' => $p],'name, price, slug', 'AND', 'one');
			
			$products['total'] = $products['total'] + $products['products'][$key]['price'];

			}
			$view->products = $products;
	    }

		$view->session  = $this->session;

		return $view->render();

	}

	public function add($slug)
	{	
		$slug = (string) $slug;

		$produto = $this->cart->add($slug);

		header('Location: /produto/view/' . $produto);
	}

	public function remove($slug)
	{	
		$slug = (string) $slug;

		$this->cart->remove($slug);

		header('Location: /cart');
	}	
}