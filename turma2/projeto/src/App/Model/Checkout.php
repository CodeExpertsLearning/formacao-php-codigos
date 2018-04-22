<?php
namespace CodeExperts\App\Model;

use PHPSC\PagSeguro\Customer\Customer;
use PHPSC\PagSeguro\Items\Item;
use PHPSC\PagSeguro\Requests\Checkout\CheckoutService;
use PHPSC\PagSeguro\Environments\Sandbox;
use PHPSC\PagSeguro\Environments\Production;
use PHPSC\PagSeguro\Credentials;
use Silex\Application;

class Checkout 
{
	/**
	 * @var String
	 */
	private $loginPagseguro = 'nandokstro@gmail.com';

	/**
	 * @var String
	 */
	private $token = '74AC9F13254844E592C46F81A546A41B';

	/**
	 * @var  Item
	 */
	private $item;


	/**
	 * Set Item
	 */
	public function setItem(Item $item)
	{
		$this->item[] = $item;
	}

	/**
	 * Mount credential to login in 
	 * pagseguro api
	 */
	private function mountCredential()
	{
		return new Credentials(
					$this->loginPagseguro,
					$this->token,
					new Sandbox()
				);
	}

	/**
	 * Checkout proccess at pagseguro
	 */
	public function checkout()
	{
		try {
			
   		    $service = new CheckoutService($this->mountCredential());

		    $checkBuilder = $service->createCheckoutBuilder();
	        
	        foreach ($this->item as $value) {
	        	$checkBuilder->addItem($value);
	        }                 

	        $checkout = $checkBuilder->getCheckout();

		    $response = $service->checkout($checkout);

		} catch(Exception $error) {

			return false;

		}

		return $response->getRedirectionUrl();
	}
}