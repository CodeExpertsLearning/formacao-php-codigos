<?php

trait Upload
{
	public function doUpload()
	{
		return 'Uploaded in ' . $this->table;
	}
}

class ProductUpload
{
	use Upload;

	protected $table = 'products_images';

}

$pUpload = new ProductUpload();

print $pUpload->doUpload();

