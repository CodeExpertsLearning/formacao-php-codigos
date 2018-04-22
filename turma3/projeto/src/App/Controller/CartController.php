<?php
namespace App\Controller;

use App\Entity\Product;
use App\MVC\BaseController;
use App\MVC\View;

class CartController extends BaseController
{
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