<?php

class Magic
{
    private $data = array();

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function __get($key)
    {
        return $this->data[$key];
    }
//
//    public function __construct()
//    {
//        print "Construct...";
//    }
//
//    function __destruct()
//    {
//        print "Destruct...";
//    }

    public function showAttr()
    {
        var_dump($this->data);
    }

    function __toString()
    {
        return json_encode($this->data);
    }
}

$magic = new Magic();

$magic->name = "Teste";
$magic->email = "teste@email.com";

//
//print $magic->name;
//
//$magic->showAttr();
//
print $magic;