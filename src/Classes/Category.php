<?php

declare(strict_types=1);

namespace PhpMentoring\Classes;

class Category
{
    private $id;
    private $name;
    private $isOnline;

    public function __construct($id, $name, $isOnline = true)
    {
        $this->id = $id;
        $this->name = $name;
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
        return " ID: " . $this->id . "<br/>Name: " . $this->name . "<br/>Is Online: " . $this->isOnline . "<br/>";
    }
}
