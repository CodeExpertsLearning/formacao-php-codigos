<?php
/**
 * Trabalhando com sessions
 */
session_start();

print session_id();

$_SESSION['name'] = "Nanderson"; 

var_dump($_SESSION);
