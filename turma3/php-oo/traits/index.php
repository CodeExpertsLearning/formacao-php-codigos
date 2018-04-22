<?php

require __DIR__ . '/vendor/autoload.php';

define('FOLDER', __DIR__ . '/upload');

use CodeExperts\Upload\UploadProduct;

$url = isset($_GET['url']) ? $_GET['url'] : '';

if(!$url)
    die("URL Não Informada!");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $file = $_FILES['upload'];
    $upload = new UploadProduct($file);
    $upload->upload();
    die;
} else {
    require __DIR__ . '/views/index.phtml';
}