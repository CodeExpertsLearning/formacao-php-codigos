<?php
$folder = __DIR__ . '/uploads/';

$imagem = $_FILES['imagem'];

//$imgAllowed = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];
//
//if(!in_array(strtolower($imagem['type']), $imgAllowed)) {
//	die("Tipo de Arquivo não Suportado!");
//}

if(!is_dir($folder))
	mkdir($folder);

$ext = strrchr($imagem['name'], '.');
$newName = md5($imagem['name']) . time() . $ext;

move_uploaded_file($imagem['tmp_name'],
					$folder . $newName);

print '<audio autoplay="autoplay" controls="controls">
	<source src="/uploads/' . $newName . '" type="audio/mp3" />
		seu navegador não suporta HTML5
	</audio>';