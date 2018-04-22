<?php
/**
 * Faz o hash da senha
 * com a api de hash de senhas do
 * próprio PHP.
 */
function generate($password)
{
	$opt = ['cost' => 11];

	return password_hash($password, PASSWORD_BCRYPT, $opt);
}

function passwordIsValid($password, $hash)
{
	return password_verify($password, $hash);
}