<?php
session_start();

if(!isset($_SESSION['user']))
	die('Acesso não permitido!');

$user = $_SESSION['user'];

print 'Olá ' . $user['name'] . ', 
<a href="logout.php">sair</a>';

print '<hr>';

var_dump($user);