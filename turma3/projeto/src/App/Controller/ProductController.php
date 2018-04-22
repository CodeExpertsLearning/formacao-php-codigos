<?php
namespace App\Controller;

use App\Entity\Product;
use App\MVC\BaseController;
use App\MVC\View;

class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new Product($this->getConnection());
    }

    public function view($slug)
    {
        $view =  new View(APP_VIEWS . 'store/single.phtml');

        $view->product = $this->product->where(['slug' => $slug]);

        return $view->render();
    }
}