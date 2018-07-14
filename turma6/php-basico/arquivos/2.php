<?php
$dir = __DIR__ . '/files';

$file = fopen($dir . '/ok.txt', 'a+');

fwrite($file, 'Teste');

fclose($file);

$file = fopen($dir . '/ok.txt', 'r');

$content = fread($file, 1024);

fclose($file);

print $content;