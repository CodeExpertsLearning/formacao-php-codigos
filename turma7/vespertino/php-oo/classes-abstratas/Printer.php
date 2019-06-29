<?php

abstract class Printer
{
    public function doPrint()
    {
        return 'Impressão realizada...';
    }

    abstract public function abs();
}