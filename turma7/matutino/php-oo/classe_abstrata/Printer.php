<?php 

abstract class Printer
{
    public function doPrint()
    {
        return __CLASS__ . ' priting...';
    }

    abstract public function abs();
}