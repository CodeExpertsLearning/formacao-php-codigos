<?php

class Printer
{
    public function execPrint()
    {
        return "Priting data...";
    }
}

class Hp extends Printer
{
    public function execPrint()
    {
        return "HP Priting data...";
    }
}


class Epson extends Printer
{
    public function execPrint()
    {
        return "Epson Priting data...";
    }
}

$printer = new Epson();


print $printer->execPrint();