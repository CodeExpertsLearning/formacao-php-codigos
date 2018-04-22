<?php
namespace Code;

class View
{
	private $view;
	private $data;

	public function __construct($view)
	{
		$this->view = $view;
	}

	public function __get($name)
	{
		return $this->data[$name];
	}

	public function __set($name, $value)
	{
		$this->data[$name] = $value;
	}

	public function render()
	{
		ob_start();

		if(!file_exists($view = VIEWS_PATH . $this->view . '.phtml'))
			die('View não existe!');

		require $view;

		return ob_get_clean();
	}
}