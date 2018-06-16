<?php
$url = substr($_SERVER['REQUEST_URI'], 1);
$url = explode('/', $url);

require __DIR__ . '/bootstrap.php';

if(isset($url[0]) && !$url[0])
{
    require __DIR__ . '/views/index.phtml';
}

if(isset($url[0]) && $url[0] == 'save')
{
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
	    $result = insert($conn, $_POST);
        return header('Location: ' . HOME);
    }
	require __DIR__ . '/views/save.phtml';
}

if(isset($url[0]) && $url[0] == 'edit')
{
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	    $result = update($conn, $_POST);

		return header('Location: ' . HOME);
	}

    $user = find($conn, $url[1]);

	require __DIR__ . '/views/edit.phtml';
}


if(isset($url[0]) && $url[0] == 'delete')
{
    delete($conn, $url[1]);

    header('Location: ' . HOME);
}