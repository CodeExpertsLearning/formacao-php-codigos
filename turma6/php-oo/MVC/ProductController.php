<?php

class ProductController
{
	public function index($id)
	{
		$str = (new Say())->saySomething(__METHOD__) . ' - ' . $id;

		require __DIR__ . '/index.phtml';
	}
}