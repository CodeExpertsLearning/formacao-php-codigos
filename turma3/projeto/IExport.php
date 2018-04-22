<?php
<?php
interface Export {
    public function export();
}

class Jsson implements Export {
    public function export()
    {
        return json_encode([]);
    }
}

class Client {
    private $exp;

    public function __contruct(Json $exp)
    {
        $this->exp = $exp;
    }

    public function doExport()
    {
        return $this->exp->export();
    }
}

$client = new Client(new Json());

$client->doExport();