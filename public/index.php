<?php

declare(strict_types=1);

ini_set('display_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../src/Bootstrap.php';


use PhpMentoring\Classes\Category;
use PhpMentoring\Classes\Product;

$category = new Category('1211', 'Test Category');
$category2 = new Category('12112', 'Test Category2');

$product = new Product('1111','BVLGARI Serpenti Ring', $category, 'Last luxury BVLGARI creation', '15000$', true);

echo($product);

$product->name = 'test';
$product->category = $category2;
echo($product);