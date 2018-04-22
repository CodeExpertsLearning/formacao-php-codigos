<?php 
namespace CodeExperts\App\Controller;

use CodeExperts\App\View;
use CodeExperts\App\Model\Product;
use CodeExperts\Entity\Connection;
use Symfony\Component\HttpFoundation\Session\Session;

class ProdutoController 
{
	public function view($slug)
	{
		$slug = (string) $slug;

		$view = new View(APP_VIEWS . 'single.phtml');
		
		$view->product = (new Product(new Connection()))->where(['slug' => $slug])[0];

		$view->session  = new Session();

		return $view->render();
	}
}