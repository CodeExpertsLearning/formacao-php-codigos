<?php
$file = __DIR__ . "/numeros.txt";

$fileO = fopen($file, "a+");

for($i = 1; $i <= 100; $i++) {
	fwrite($fileO, $i . PHP_EOL);
}

fclose($fileO);