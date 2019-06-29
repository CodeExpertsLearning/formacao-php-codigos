<?php
date_default_timezone_set('America/Sao_Paulo');
//bootstrap.php
require __DIR__ . '/vendor/autoload.php';

define('HOME', '');
define('APP_DEBUG', true);
define('TEMPLATES', __DIR__ . '/templates');

ini_set('display_errors', APP_DEBUG);
error_reporting(E_ALL | E_NOTICE | E_ERROR | E_WARNING | E_PARSE);
