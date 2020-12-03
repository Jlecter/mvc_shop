<?php

use PHPUnit\Framework\TestCase;
use app\models\Product;

class ProductTest extends TestCase
{
    protected $stack;

    protected function setUp(): void
    {
        $this->stack = Product::getProductsList();
    }

    public function testAdd()
    {
        $this->assertIsArray($this->stack);
    }

}