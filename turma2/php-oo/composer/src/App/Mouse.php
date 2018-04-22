<?php 
namespace App;

use App\Contract\Product;

class Mouse implements Product
{
	public function save()
	{
		return 'Mouse';
	}
}