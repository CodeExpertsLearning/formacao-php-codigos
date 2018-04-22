<?php
namespace Code;

use Code\Entity\User;
use Code\Service\SessionService;

class Authenticator
{
	/**
	 * @var array
	 */
	private $credentials = [];

	/**
	 * @var User
	 */
	private $user;

	public function __construct(array $credentials = [], User $user)
	{

		if(!isset($credentials['email'])
		   && isset($credentials['password'])) {
			throw new \Exception("Invalid credentials data!");
		}

		$this->credentials = $credentials;
		$this->user = $user;
	}

	public function authenticate()
	{

		$user = $this->user->where(['email' => $this->credentials['email']]);

		if(!$user){
			throw new \Exception("Login or password are invalid!");
		}

		$passwordHash = new PasswordHash();

		if(!$passwordHash->isValidPassword($this->credentials['password'], $user['password']))	{
			throw new \Exception("Login or password are invalid!");
		}

		unset($user['password']);

		return $user;
	}

	public function setUserInSession(SessionService $session, $user)
	{
		$session->sessionStart();

		$_SESSION['user'] = $user;

		return $user;
	}
}