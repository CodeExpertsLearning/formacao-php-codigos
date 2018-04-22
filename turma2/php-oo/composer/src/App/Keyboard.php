<?php 
namespace App;

use App\Contract\Product;

class Keyboard implements Product
{
	public function save()
	{
	    return 'Keyboard';	
	}
}