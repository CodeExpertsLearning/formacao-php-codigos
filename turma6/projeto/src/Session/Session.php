<?php
namespace Session;

class Session
{
	public static function sessionStart()
	{
		if(session_status() == PHP_SESSION_NONE) {
			session_start();
		}
	}

	public static function get($key)
	{
		self::sessionStart();

		if(!isset($_SESSION[$key]))
			return false;

		return $_SESSION[$key];
	}

	public static function set($key, $value)
	{
		self::sessionStart();

		$_SESSION[$key] = $value;

		return $value;
	}

	public static function remove($key)
	{
		self::sessionStart();

		if(!isset($_SESSION[$key]))
			return false;

		unset($_SESSION['key']);

		return true;
	}
}