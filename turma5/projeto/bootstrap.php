<?php
date_default_timezone_set("America/Sao_Paulo");

$autoloader = require __DIR__ . '/vendor/autoload.php';

Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$autoloader, 'loadClass']);

define('HOME', 'http://localhost:4040/');
define('CONFIG_PATH', __DIR__ . '/config/');
define('VIEWS_PATH', __DIR__ . '/views/');