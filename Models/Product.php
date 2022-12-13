<?php
//Buona pratica per lavorare in maniera separata
require_once __DIR__ . "/Category.php";
class Product
{
    public $name;
    public $price;
    public $img;
    public $category;

    public function __construct(string $name, float $price, string $img, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->category = $category;
    }
}
