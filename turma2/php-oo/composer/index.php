<?php 
require __DIR__ . '/vendor/autoload.php';

use App\Mouse;
use App\Client;

$product = new Mouse();

$client = new Client();

$client->execute($product);