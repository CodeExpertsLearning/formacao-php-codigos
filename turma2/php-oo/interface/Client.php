<?php 

class Client
{
	public function execute(ProductInterface $ok)
	{
	    print $ok->save();
	}
}