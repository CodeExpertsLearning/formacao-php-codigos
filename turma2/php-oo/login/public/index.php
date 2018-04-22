<?php 
/**
 * Muda o diretorio para o 
 * diretorio raiz do sistema...
 */
chdir(dirname(__DIR__));

/**
 * Resume o PATH SEPARATOR
 * que traz os diretórios conforme o sistema operacional
 */
define("DS", DIRECTORY_SEPARATOR);

/**
 * Carrega o autoload gerado com composer
 * para conhecimento das classes do sistema
 */
require 'vendor' . DS . 'autoload.php';

/**
 * Inicia sessão no php
 */
session_start();

/**
 * Pastas do sistema 
 * Views -> Telas do Sistema
 * Config -> Configurações necessarias para 
 * funcionamento do sistema
 */
$views = 'views' . DS;
$config = 'config' . DS;

/**
 * Dados de acesso ao banco de dados
 */
$db = require $config . 'database.php';

/**
 * Cria conexão com banco de dados
 */
$pdo = new \PDO("mysql:dbname={$db['dbname']};host={$db['host']}", $db['user'], $db['password']);
/**
 * Habilita a visualização dos erros gerados
 * pelo banco de dados...
 */
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/**
 * Key unica por sistema
 */
define('KEY', 'sJnt5Jr;q9_5c67&');

/**
 * Carrega rotas básicas do sistema...
 */
require 'app.php';