<?php 

class Json implements IExport
{
    private $data;

    public function setData($data)
    {
        $this->data = $data;
    }

    public function export()
    {
        return json_encode($this->data);
    }
}