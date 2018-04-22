<?php
namespace App\MVC;

class View
{
    private $data = [];
    private $view;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public function __get($value)
    {
        if(!isset($this->data[$value])) {
            return null;
        }

        return $this->data[$value];
    }

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function render()
    {
        ob_start();

        require $this->view;

        return ob_get_clean();
    }

}