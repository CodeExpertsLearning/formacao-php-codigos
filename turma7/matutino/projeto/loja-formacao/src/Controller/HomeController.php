<?php
namespace LojaApp\Controller;

use LojaApp\MVC\View;

class HomeController
{
    public function index()
    {
        $products = [
            ['name' => 'Produto Teste', 'price' => 19.90],
            ['name' => 'Produto Teste', 'price' => 199.90],
            ['name' => 'Produto Teste', 'price' => 299.90],
            ['name' => 'Produto Teste', 'price' => 319.90],
            ['name' => 'Produto Teste', 'price' => 199.90],
        ];
           
        return View::render('index', compact('products'));

    }
}