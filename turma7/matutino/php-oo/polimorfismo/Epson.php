<?php 

class Epson extends Printer
{
    public function doPrint()
    {
        return __CLASS__ . ' priting...';
    }
}