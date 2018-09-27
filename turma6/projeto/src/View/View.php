<?php
namespace View;

class View
{
	public static function render($view, $params = [])
	{
		$view = VIEWS_PATH . $view . '.phtml';

		if(!file_exists($view))
			throw new \Exception("View {$view} not found!");

		extract($params);
		require $view;
	}
}