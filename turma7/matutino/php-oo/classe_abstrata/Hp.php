<?php 

class Hp extends Printer
{
    public function doPrint()
    {
        return __CLASS__ . ' priting...';
    }

    public function abs()
    {
        return __METHOD__;
    }
}