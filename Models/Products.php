<?php
require_once __DIR__ . "/Category.php";
class Product
{
    public $image;
    public $title;
    public $brand;
    public $type;
    public $price;
    public $categories;

    public function __construct(String $image, String $title, String $brand, String $type, int $price, Category $categories)
    {
        $this->image = $image;
        $this->title = $title;
        $this->marca = $brand;
        $this->type = $type;
        $this->price = $price;
        $this->categories = $categories;
    }
}
