<?php
interface Export {
    public function export();
}

class Json implements Export {
    public function export()
    {
        return json_encode([__FUNCTION__]);
    }
}

class Xml implements Export {
    public function export()
    {
        return 'XML';
    }
}

class PlainText implements Export {
    public function export()
    {
        return 'Plain Text';
    }
}

class Client {
    private $exp;

    public function __construct(Export $exp)
    {
        $this->exp = $exp;
    }

    public function doExport()
    {
        return $this->exp->export();
    }
}

$client = new Client(new Json());

print $client->doExport();