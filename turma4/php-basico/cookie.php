<?php
/**
 * Seta um cookie com 
 * 1 de validade
 * php.net/setcookie
 */
$expiresTime = strtotime('-1day');
setcookie('test', '123456', $expiresTime);

/**
 * Recupera o Cookie: test
 */
print $_COOKIE['test'];
