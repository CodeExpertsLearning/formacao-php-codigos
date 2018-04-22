<?php 
namespace CodeExperts\App\Controller;

use CodeExperts\App\View;
use CodeExperts\App\Model\Product;
use CodeExperts\Entity\Connection;

class HomeController 
{
	public function index()
	{
		$view = new View(APP_VIEWS . 'index.phtml');
		
		$view->products = (new Product(new Connection()))->getAll();

		return $view->render();
	}
}