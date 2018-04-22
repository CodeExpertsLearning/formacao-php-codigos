<?php 
namespace App;

use App\Contract\Product;

class Client
{
	public function execute(Product $ok)
	{
	    print $ok->save();
	}
}