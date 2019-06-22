<?php

require __DIR__ . '/Printer.php';
require __DIR__ . '/Hp.php';
require __DIR__ . '/Epson.php';

$printer = new Epson();
print $printer->doPrint();