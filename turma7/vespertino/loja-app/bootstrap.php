<?php
date_default_timezone_set('America/Sao_Paulo');
//bootstrap.php
$autoloader = require __DIR__ . '/vendor/autoload.php';
Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$autoloader, 'loadClass']);

//App Config
define('HOME', 'http://localhost:3030');
define('APP_DEBUG', true);
define('TEMPLATES', __DIR__ . '/templates');

//Database Configs
define('DB_HOST',  '127.0.0.1');
define('DB_NAME',  'loja_app');
define('DB_USER',  'root');
define('DB_PASSWORD',  '');

//PagSeguro
define('PAGSEGURO_EMAIL', 'nandokstro@gmail.com');
define('PAGSEGURO_TOKEN', '74AC9F13254844E592C46F81A546A41B');
define('PAGSEGURO_SANDBOX', true);

ini_set('display_errors', APP_DEBUG);
error_reporting(E_ALL | E_NOTICE | E_ERROR | E_WARNING | E_PARSE);
