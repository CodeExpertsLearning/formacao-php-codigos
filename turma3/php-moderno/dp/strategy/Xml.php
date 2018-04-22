<?php 

class Xml implements IExport
{
    private $data;

    public function setData($data)
    {
        $this->data = $data;
    }

    public function export()
    {
        $xml = new SimpleXMLElement('<?xml version="1.0"?><data></data>');
        
        array_walk_recursive($this->data, array ($xml, 'addChild'));
        
        print $xml->asXML();
    }
}