<?php

/**
 * Se pasta files não existir dentro da pasta arquivos
 * nós vamos criar ela com PHP durante a execução do script
 */
$dir = __DIR__ . '/files';

if(!is_dir($dir)) {
	mkdir($dir);
}

file_put_contents($dir . '/test1.txt', "Conteudo inserido \n", FILE_APPEND);
$content = file_get_contents($dir . '/test1.txt');

print $content;
//unlink($dir . '/test1.txt');
