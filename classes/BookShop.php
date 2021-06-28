<?php

class BooksShop
{

    protected $title;
    protected $sub_title;
    protected $author;
    protected $price;

    public function __construct(string $title, string $sub_title, string $author, float $price)
    {
        $this->title = $title;
        $this->sub_title = $sub_title;
        $this->author = $author;
        $this->price = $price;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getSubTitle()
    {
        return $this->sub_title;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getPrice()
    {
        return $this->price;
    }
}

class Book extends BooksShop
{
    public $editor;
    public $language;
    public $flexible_cover;
    public $ISBN_10;
    public $articole_weight;
    public $size;
    public $customer_reviews;

    public function __construct(
        string $title,
        string $sub_title,
        string $author,
        float $price,
        string $editor,
        string $language,
        int $flexible_cover,
        string $ISBN_10,
        int $articole_weight,
        string $size,
        float $customer_reviews
    ) {
        parent::__construct($title, $sub_title, $author, $price);
        $this->editor = $editor;
        $this->language = $language;
        $this->flexible_cover = $flexible_cover;
        $this->ISBN_10 = $ISBN_10;
        $this->articole_weight = $articole_weight;
        $this->size = $size;
        $this->customer_reviews = $customer_reviews;
    }
}
