<?php

declare(strict_types=1);

namespace PhpMentoring\classes;

use InvalidArgumentException;
use PharIo\Manifest\Email;
use PhpMentoring\Classes\Product;

class User
{
    private $id;
    private $username;
    private $email;
    private $favorite_products = [];
    public function __construct(string $id, string $username, Email $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }

    public function addFavoriteProduct(Product $product): bool
    {
        $this->favorite_products[] = $product;

        return true;
    }

    public function removeFavoriteProduct(Product $product): bool
    {
        if (!in_array($product, $this->favorite_products)) {
            throw new InvalidArgumentException("Unknown product: " . $product);
        }

        unset($this->favorite_products[array_search($product, $this->favorite_products)]);

        return true;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    public function __toString()
    {
        return "Customer ID: " . $this->id . "<br/>Username: " . $this->username . "<br/>Email: " . $this->email->asString();
    }
}
