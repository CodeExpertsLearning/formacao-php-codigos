<?php
namespace Code;

class PasswordHash
{
	private $password;

	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}

	public function generate()
	{
		$opt = ['cost' => 11];

		return password_hash($this->password, PASSWORD_BCRYPT, $opt);
	}

	public function isValidPassword($password, $hash)
	{
		return password_verify($password, $hash);
	}
}