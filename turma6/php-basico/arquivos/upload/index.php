<?php
$method = $_SERVER['REQUEST_METHOD'];
$dir = __DIR__ . '/uploaded_files';

if($method == 'POST') {
	$file = $_FILES['photo'];

	if(!is_dir($dir)) {
		mkdir($dir);
	}

	for($i = 0; $i < count($file['name']); $i++) {
		$ext = strrchr($file['name'][$i], '.');
		$newName = sha1($file['name'][$i]) . uniqid() . $ext;

		if(move_uploaded_file($file['tmp_name'][$i], $dir . '/' . $newName)) {
			print 'Arquivo uploaded...';
		} else {
			die('Fail');
		}
	}
}

$images = glob($dir . '/*.*');

require __DIR__ . '/form.phtml';
