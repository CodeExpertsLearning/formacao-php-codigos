<?php
define('DS', DIRECTORY_SEPARATOR);

require __DIR__ . DS . 'vendor' . DS . 'autoload.php';

use CodeExperts\App;

$app = new App();

print $app->run();