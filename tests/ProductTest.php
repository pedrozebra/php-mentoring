<?php

use PhpMentoring\Classes\Product;
use PhpMentoring\Classes\Category;
use PHPUnit\Framework\TestCase;

final class ProductTest extends TestCase
{
    public function testClassConstructor()
    {
        $category = new Category('1', 'Jewerly');
        $product = new Product('1', 'BVLGARI Serpenti', $category, 'Last luxury BVLGARI creation', '10000$', true);
        self::assertSame('BVLGARI Serpenti', $product->name);
        self::assertSame('Last luxury BVLGARI creation', $product->description);
        self::assertSame('10000$', $product->price);
        self::assertSame(true, $product->isOnline);
        self::assertSame('Jewerly', $product->category->name);
        self::assertIsBool($product->isOnline);
    }

    public function testGetName()
    {
        $category = new Category('1', 'Jewerly');
        $product = new Product('1', 'BVLGARI Serpenti', $category, 'Last luxury BVLGARI creation', '10000$', true);
        $this->assertIsString($product->__get('name'));
        $this->assertStringContainsStringIgnoringCase('BVLGARI Serpenti', $product->__get('name'));
    }
}
