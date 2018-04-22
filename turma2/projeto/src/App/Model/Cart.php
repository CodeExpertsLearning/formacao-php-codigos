<?php
namespace CodeExperts\App\Model;

use Silex\Application;
use Symfony\Component\HttpFoundation\Session\Session;

class Cart
{
	/**
	 * @var  array
	 */
	private $products = [];

	/**
	 * @var  Application
	 */
	private $session;

	public function __construct(Session $session)
	{
		$this->session = $session;
		$this->session->start();
	}	

	public function all()
	{
		return $this->session->all();
	}

	public function add($product)
	{
		if($this->session->has('products')){

			$this->products = $this->session->get('products');
			array_push($this->products, $product);

		} else {
			$this->products[] = $product;
		}

		$this->session->set('products', $this->products);

		$this->session->getFlashBag()->add('success', 'Produto Inserido Com Sucesso!');

		return $product;
	}

	public function remove($product)
	{
		if($this->session->has('products')){

			$this->products = $this->session->get('products');
			$this->products = array_filter($this->products, function($var) use($product){
				return $var !== $product;
			});
		}

		if(count($this->products) != 0) {
			$this->session->set('products', $this->products);
		} else {
			$this->session->remove('products');
		}
		
		$this->session->getFlashBag()->add('success', 'Carrinho Atualizado!');

		return true;
	}

}