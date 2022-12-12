<?php
class Product
{
    public $name;
    public $price;
    public $category;

    public function __construct(string $name, int $price, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }
}
