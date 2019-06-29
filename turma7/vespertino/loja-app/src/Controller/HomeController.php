<?php
namespace LojaApp\Controller;

use LojaApp\MVC\View;

class HomeController
{
    public function index()
    {
        $products = [
            ['name' => 'Produto 1', 'price' => 199.90],
            ['name' => 'Produto 2', 'price' => 299.90],
            ['name' => 'Produto 3', 'price' => 399.90],
            ['name' => 'Produto 4', 'price' => 499.90],
        ];
        
        return View::render('index', compact('products'));
    }
}