<?php
require __DIR__ . '/../bootstrap.php';

$url = explode('/', substr($_SERVER['REQUEST_URI'], 1));

$controller = !isset($url[0]) || !$url[0]? 'home' :  $url[0];

if(!class_exists($controller = 'Code\Controller\\' . ucfirst($controller) . 'Controller')) {
	die('Controller Não Encontrado!');
}

$actions = !isset($url[1]) || !$url[1] ? 'index' :  $url[1];
$params  = !isset($url[2]) || !$url[2] ? '' :  $url[2];

if(!method_exists($controller, $actions)) {
	$params = $actions;
	$actions = 'index';
}

$response = call_user_func_array([new $controller, $actions], [$params]);

print $response;