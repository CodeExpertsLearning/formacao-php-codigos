<?php

require __DIR__ . '/Say.php';
require __DIR__ . '/ProductController.php';


$url = $_SERVER['REQUEST_URI'];

$url = explode('/', $url);

$controller = ucfirst($url[1]) . 'Controller';

$controller = new $controller;
print $controller->{$url[2]}($url[3]);