<?php
namespace LojaApp\MVC;

class View
{
    public static function render($view, $data = [])
    {
        extract($data);
        require TEMPLATES . '/' . $view . '.phtml';
    }
}