<?php
//Apaga um arquivo, se ele existir
if(file_exists(__DIR__ . '/numeros.txt')) {
	unlink(__DIR__ . '/numeros.txt');
	print 'Arquivo removido com sucesso';
} else {
	print 'Arquivo não existe';
}
