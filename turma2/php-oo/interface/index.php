<?php
require __DIR__ . '/ProductInterface.php';
require __DIR__ . '/Mouse.php';
require __DIR__ . '/Keyboard.php';
require __DIR__ . '/Client.php';



$product = new Mouse();

$c = new Client();
$c->execute($product);