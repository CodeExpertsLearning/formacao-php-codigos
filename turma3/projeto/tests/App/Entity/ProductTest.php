<?php
namespace App\Entity;

use App\TestCase;

class ProductTest extends TestCase
{
    public function testSetterEGetters()
    {
        $product = new Product($this->conn);

        $product->name = 'Curso de PHP';
        $product->created_at = new \DateTime('now',
            new \DateTimeZone("America/Belem"));
        $product->updated_at = new \DateTime('now',
            new \DateTimeZone("America/Belem"));

        $this->assertEquals(
            'Curso de PHP',
            $product->name
        );
    }

    public function testInserirNovoProdutoNaBaseDeDados()
    {
        $product = new Product($this->conn);

        $product->name = 'Curso de PHP';

        $this->assertEquals(1, $product->insert());

        $select = $this->conn->query('SELECT * FROM products');
        $select = $select->fetch(\PDO::FETCH_ASSOC);

        $this->assertEquals('Curso de PHP', $select['name']);
    }

    /**
     * @depends testInserirNovoProdutoNaBaseDeDados
     */
    public function testAtualizarProdutoNaBaseDeDados()
    {
        $product = new Product($this->conn);

        $product->name = 'Curso de PHP';

        $product->insert();

        $product = new Product($this->conn);
        $product->id = 1;
        $product->name = "Curso de PHP Edited";

        $this->assertTrue($product->update());

        $select = $this->conn->query('SELECT * FROM products');
        $select = $select->fetch(\PDO::FETCH_ASSOC);

        $this->assertEquals('Curso de PHP Edited', $select['name']);
        $this->assertEquals(1, $select['id']);
    }
}