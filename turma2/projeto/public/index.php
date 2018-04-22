<?php
ini_set('display_errors', 0);

define('APP_ROOT', dirname(__DIR__));

require APP_ROOT . '/vendor/autoload.php';

define('APP_VIEWS', APP_ROOT . '/views/');


$url = isset($_SERVER['REQUEST_URI'])? explode('/',  substr($_SERVER['REQUEST_URI'], 1)) : '';

if($url[0] == '')
    $url[0] = 'home';

if(class_exists($controller = 'CodeExperts\App\Controller\\' . ucfirst($url[0]) .'Controller')){

    $actions = isset($url[1]) ? $url[1] : 'index';
    $params  = isset($url[2]) ? $url[2] : '';

    $response = call_user_func_array([new $controller, $actions], [$params]);

    print $response;
} else {
    print 'Controller não informado';
}