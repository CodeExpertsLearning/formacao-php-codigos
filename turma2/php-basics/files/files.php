<?php

if(!is_dir($folder = __DIR__ . '/data')) {
	mkdir($folder);
}

// $file = fopen($folder . '/nome.txt', 'a+');

// fwrite($file, "Testando escrever em um arquivo!");
// fclose($file);
// 
// $file = file_get_contents($folder . '/nome.txt');

for ($i=0; $i <= 200 ; $i++) { 
	file_put_contents($folder . '/nome.txt', $i ."\n",  FILE_APPEND);
	print "Escreveu no arquivo o numero " . $i . "<br>";

}

// print $file;