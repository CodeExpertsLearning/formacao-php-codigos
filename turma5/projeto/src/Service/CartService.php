<?php
namespace Code\Service;

class CartService
{
	/**
	 * @var  array
	 */
	private $products = [];

	/**
	 * @var  SessionService
	 */
	private $session;

	public function __construct(SessionService $session)
	{
		$this->session = $session;
		$this->session->sessionStart();
	}

	public function add($product)
	{
		if(isset($_SESSION['products'])){

			$this->products = $_SESSION['products'];
			array_push($this->products, $product);

		} else {
			$this->products[] = $product;
		}

		$_SESSION['products'] = $this->products;

		$this->session->addFlash('success', 'Produto Inserido Com Sucesso!');

		return $product;
	}

	public function remove($product)
	{
		if(isset($_SESSION['products'])){

			$this->products = $_SESSION['products'];
			$this->products = array_filter($this->products, function($var) use($product){
				return $var !== $product;
			});
		}

		if(count($this->products) != 0) {
			$_SESSION['products'] = $this->products;
		} else {
			unset($_SESSION['products']);
		}

		$this->session->addFlash('success', 'Carrinho Atualizado!');

		return true;
	}

}