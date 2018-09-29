<?php
date_default_timezone_set('America/Sao_Paulo');

#bootstrap.php
require __DIR__ . '/vendor/autoload.php';

//APP Configs
define('CONTROLLER_DEFAULT', 'home');
define('METHOD_DEFAULT',  'index');
define('HOME', 'http://localhost:3030');
define('VIEWS_PATH', __DIR__ . '/views/');

//DB Config
define('DB_NAME', 'turma_fp_php_proj');
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASSWORD', '');