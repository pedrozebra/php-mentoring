<?php

declare(strict_types=1);

require __DIR__ . '/../src/Bootstrap.php';

use PharIo\Manifest\Email;
use PhpMentoring\Classes\Category;
use PhpMentoring\Classes\Product;
use PhpMentoring\classes\User;

$category = new Category('1211', 'Jewerly');
$categoryTwo = new Category('1211', 'Watches');
$user = new User('7374hryU', "pedrozebra", new Email("pdellanotte@gmail.com"));

$product = new Product('1111', 'BVLGARI Serpenti Ring', $category, 'Last luxury BVLGARI creation', '15000$', true);
$productTwo = new Product('356910', 'BVLGARI Save the Children Necklace', $category, 'Save the Children 10th anniversary necklace in sterling silver with pendant set with onyx element and a ruby', '770$', true);
$productThree = new Product('103611', 'BVLGARI Save the Children Necklace', $categoryTwo, 'Octo Finissimo Ultra watch with mechanical manufacture ultra-thin movement, manual winding, sandblasted titanium case', '45000$', true);
$user->addFavoriteProduct($product);
$user->addFavoriteProduct($productTwo);
$user->addFavoriteProduct($productThree);

echo ($product);
echo "<br/><br/><br/>";
echo ($user);
