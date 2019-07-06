<?php
date_default_timezone_set('America/Sao_Paulo');
//bootstrap.php
require __DIR__ . '/vendor/autoload.php';

define('HOME', '');
define('APP_DEBUG', true);
define('TEMPLATES', __DIR__ . '/templates');

//Database Configs
define('DB_HOST',  '127.0.0.1');
define('DB_NAME',  'loja_app');
define('DB_USER',  'root');
define('DB_PASSWORD',  '');

ini_set('display_errors', APP_DEBUG);
error_reporting(E_ALL | E_NOTICE | E_ERROR | E_WARNING | E_PARSE);
