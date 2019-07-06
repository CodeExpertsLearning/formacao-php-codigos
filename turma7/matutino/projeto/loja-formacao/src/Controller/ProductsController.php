<?php
namespace LojaApp\Controller;

use LojaApp\MVC\View;
use LojaApp\Model\Product;
use LojaApp\Database\Connection;

class ProductsController
{
    public function view($slug)   
    {
         try {
            $product = (new Product(Connection::getInstance()))->find($slug);
        
            return View::render('single', compact('product'));
            
        } catch(\Exception $e) {

            die($e->getMessage());
        }
    }
}