<?php
namespace LojaApp\Controller;

use LojaApp\Http\Session;

class CartController
{
    public function add($product)
    {
        $items = Session::get('cart');

        if(!is_null($items)) {
            array_push($items, $product);
        } else {
            $items[] = $product;
        }
        
        Session::add('cart', $items); 
        
        return header('Location: ' . HOME 
        . '/products/view/' . $product);
    }
}