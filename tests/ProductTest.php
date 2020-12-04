<?php

use PHPUnit\Framework\TestCase;
use app\models\Product;

class ProductTest extends TestCase
{

    /**
     * List of products
     * @param string $stack
     */
    protected $stack;

    /**
     * Real index that consists in DB
     * @param string $testCode
     */
    protected $testCode = 'ZA';

    protected function setUp(): void
    {
        $this->stack = Product::getProductsList();
    }

    public function testAdd()
    {
        $resultArr = Product::getProductByCode($this->testCode);
        $this->assertSame([$this->testCode => $this->stack[$this->testCode]], $resultArr);
        $this->assertIsArray($this->stack);
    }

}