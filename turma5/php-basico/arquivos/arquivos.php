<?php
$file = __DIR__ . "/exemplo.txt";

$fileO = fopen($file, "a+");

fwrite($fileO, "Texto Exemplo No Arquivo." . PHP_EOL);

fclose($fileO);