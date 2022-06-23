<?php

use PharIo\Manifest\Email;
use PhpMentoring\Classes\Category;
use PhpMentoring\Classes\Product;
use PhpMentoring\classes\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testAddFavoriteProduct()
    {
        $user = new User('7374hryU', "pedrozebra", new Email("pdellanotte@gmail.com"));

        $category = new Category('1211', 'Jewerly');

        $product = new Product('1111', 'BVLGARI Serpenti Ring', $category, 'Last luxury BVLGARI creation', '15000$', true);
        $productTwo = new Product('356910', 'BVLGARI Save the Children Necklace', $category, 'Save the Children 10th anniversary necklace in sterling silver with pendant set with onyx element and a ruby', '770$', true);

        $this->assertTrue($user->addFavoriteProduct($product));
        $this->assertContains($product, $user->favorite_products);
        $this->assertCount(1, $user->favorite_products);

        $this->assertTrue($user->addFavoriteProduct($productTwo));
        $this->assertContains($productTwo, $user->favorite_products);
        $this->assertCount(2, $user->favorite_products);
    }

    public function testRemoveFavoriteProduct()
    {
        $user = new User('7374hryU', "pedrozebra", new Email("pdellanotte@gmail.com"));

        $category = new Category('1211', 'Jewerly');

        $product = new Product('1111', 'BVLGARI Serpenti Ring', $category, 'Last luxury BVLGARI creation', '15000$', true);
        $productTwo = new Product('356910', 'BVLGARI Save the Children Necklace', $category, 'Save the Children 10th anniversary necklace in sterling silver with pendant set with onyx element and a ruby', '770$', true);
        $this->assertTrue($user->addFavoriteProduct($product));
        $this->assertTrue($user->addFavoriteProduct($productTwo));
        $this->assertCount(2, $user->favorite_products);

        $this->assertTrue($user->removeFavoriteProduct($productTwo));
        $this->assertNotContains($productTwo, $user->favorite_products);
        $this->assertCount(1, $user->favorite_products);
    }
}
