<?php
namespace LojaApp\Controller;

use LojaApp\MVC\View;
use LojaApp\Database\Connection;
use LojaApp\Model\Product;

class HomeController
{
    public function index()
    {

        try {
            $products = (new Product(Connection::getInstance()))->findAll();
        
            return View::render('index', compact('products'));
            
        } catch(\Exception $e) {
            die($e->getMessage());
        }

    }
}