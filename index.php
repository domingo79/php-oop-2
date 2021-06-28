<?php

class BooksShop
{

    public $title;
    public $sub_title;
    public $author;
    protected $price;

    public function __construct(string $title, string $sub_title, string $author, float $price)
    {
        $this->title = $title;
        $this->sub_title = $sub_title;
        $this->author = $author;
        $this->price = $price;
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
        int $ISBN_10,
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
$test = new Book('titolo', 'sottotitolo', 'pinco', 18.99, 'editore(26 giugno 2020)', 'ita', 265, 12345, 620, '25cm', 7.50);
var_dump($test);
$testdue = new Book('titolo', 'sottotitolo', 'pinco', 18.50, 'editore', 'ita', 265, 12345, 620, '25x24x2.2cm', 7.50);
var_dump($testdue);
