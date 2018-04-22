<?php
require __DIR__ . '/autoload.php';

use CodeExperts\App\Boot\Boot;
use CodeExperts\Boot\Boot as BootCode;

$boot = new BootCode();

print $boot->run();