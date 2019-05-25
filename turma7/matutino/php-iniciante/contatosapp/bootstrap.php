<?php
date_default_timezone_set('America/Sao_Paulo');

define('TEMPLATES', __DIR__ . '/templates/');

define('DB_NAME', 'contatosapp');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1');

$con = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST, 
                DB_USER, DB_PASSWORD);

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);