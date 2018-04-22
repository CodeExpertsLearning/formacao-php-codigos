<?php
namespace CodeExperts\Upload;

trait UploadTrait
{
    public function upload()
    {
        $ext = strrchr(
            $this->file['name'],
            '.');

        $newName = sha1(
                $this->file['name']) . time() . $ext;

        return move_uploaded_file(
            $this->file['tmp_name'],
            FOLDER . '/'. $this->folder . '/'.$newName);
    }
}