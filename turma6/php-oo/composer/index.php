<?php
print '<h2>Composer</h2>';
print '<hr>';

require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('APP');
$log->pushHandler(
	new StreamHandler(
		__DIR__ . '/mylog.log',
		Logger::WARNING )
);

// add records to the log
$log->warning('Foo');
$log->error('Bar');
