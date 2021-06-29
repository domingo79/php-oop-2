<?php

class Pizza extends Products
{
    public $ingredients;
    use getFullName;

    public function __construct(string $name, string $description, string $ingredients, float $price)
    {
        parent::__construct($name, $description, $price);
        $this->ingredients = $ingredients;
    }
}
