<?php

declare(strict_types=1);

namespace PhpMentoring\Classes;

use PhpMentoring\Classes\Category;

class Product
{
    private $id;
    private $name;
    private $category;
    private $description;
    private $price;
    private $isOnline;

    public function __construct($id, $name, Category $category, $description, $price, $isOnline)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->description = $description;
        $this->price = $price;
        $this->isOnline = $isOnline;
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
        return "ID: " . $this->id . "<br/>Name: " . $this->name . "<br/>Description: " . $this->description . "<br/>Price: " . $this->price . "<br/>Is Online: " . $this->isOnline . "<br>Category: <br/>" . $this->category . "<br/> ";
    }
}
