<?php 
    session_start();

    if(!isset($_SESSION['user']))
        die("Faça Login para Acessar a Página!");

    $user = $_SESSION['user'];
?>
<h3>Seja Bem Vindo <?=$user['name'];?></h3>
<a href="/session_cookies/login/logout.php">Sair</a>