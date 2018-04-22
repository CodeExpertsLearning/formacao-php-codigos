<?php
session_start();

// print $_SESSION['user']['name'];

// unset($_SESSION['name']); // Remove chaves especificas da sessao

$_SESSION = [];

session_destroy();

var_dump($_SESSION);