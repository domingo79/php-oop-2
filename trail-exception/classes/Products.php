<?php

class Products
{
    public $name;
    public $description;
    protected $price;

    public function __construct(string $name, string $description, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        if (!is_float($price)) {
            throw new Exception("Not a valid price");
        }
    }
}
