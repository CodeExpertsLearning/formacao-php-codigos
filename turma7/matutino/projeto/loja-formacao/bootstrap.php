<?php
require __DIR__ . '/vendor/autoload.php';

date_default_timezone_set("America/Sao_Paulo");

//App Configs
define('PROJECT_DIR', __DIR__);
define('APP_DEBUG', true);
define('HOME', '');
define('TEMPLATES', PROJECT_DIR . '/templates');

//Database Config
define('DB_NAME',  'loja_app');
define('DB_HOST',  '127.0.0.1');
define('DB_USER',  'root');
define('DB_PASSWORD',  '');
define('DB_CHARSET',  'UTF8');

ini_set('display_errors', APP_DEBUG);
error_reporting(E_ALL | E_NOTICE | E_WARNING);

