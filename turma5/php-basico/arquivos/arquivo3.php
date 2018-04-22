<?php
//Lê um arquivo.
$fileRead = __DIR__ . "/numeros.txt";
$file = file_get_contents($fileRead);
print $file;

//Escreve em um arquivo, com o FILE_APPEND sempre adiciona ao fim do arquivo os valores passados
file_put_contents("fileP.txt", "Escrito com file_put_content", FILE_APPEND);
