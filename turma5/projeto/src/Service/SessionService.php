<?php
namespace Code\Service;

class SessionService
{
	public static function sessionStart()
	{
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
	}

	public static function addFlash($key, $message)
	{
		self::sessionStart();

		$_SESSION[$key] = $message;
	}

	public static function getFlash($key)
	{
		self::sessionStart();

		if(!isset($_SESSION[$key])) {
			return false;
		}

		$msg = $_SESSION[$key];

		unset($_SESSION[$key]);

		return $msg;
	}
}