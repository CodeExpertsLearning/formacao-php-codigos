<?php
require __DIR__ . '/../bootstrap.php';

$url = substr($_SERVER['REQUEST_URI'], 1);
$url = explode('/', $url);

$controller = isset($url[0]) && $url[0] ? $url[0] : CONTROLLER_DEFAULT;
$controller = $controller = 'Controller\\'
                            . ucfirst($controller) . 'Controller';

if(!class_exists($controller)) {
	return \View\View::render('404', compact('controller'));

}

$method = isset($url[1]) && $url[1] ? $url[1] : METHOD_DEFAULT;
$params = isset($url[2]) && $url[2] ? [$url[2]] : [];

print call_user_func_array([new $controller, $method], $params);