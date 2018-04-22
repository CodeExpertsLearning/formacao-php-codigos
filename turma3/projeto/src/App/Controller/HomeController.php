<?php
namespace App\Controller;

use App\Entity\Product;
use App\MVC\BaseController;
use App\MVC\View;

class HomeController extends BaseController
{
    private $products;

    public function __construct()
    {
        $this->products = new Product($this->getConnection());
    }

    public function index()
    {
        $view =  new View(APP_VIEWS . 'store/index.phtml');

        $view->products = $this->products->findAll();

        return $view->render();
    }
}