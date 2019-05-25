<?php
define('TEMPLATES', __DIR__ . '/templates');

define('DB_NAME', 'contatos_app');
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');

$con = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST, 
DB_USER, DB_PASS);

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);