<?php
namespace CodeExperts\Upload;

use CodeExperts\Upload\UploadTrait;

class UploadProduct
{
    use UploadTrait;

    private $file;
    private $folder = 'product';

    public function __construct($file)
    {
        $this->file = $file;
    }
}