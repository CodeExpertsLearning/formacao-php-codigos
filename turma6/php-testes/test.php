<?php
use Calc\Sum;

require __DIR__  . '/vendor/autoload.php';

$sum = new Sum(10, 20);
print $sum->doSum();