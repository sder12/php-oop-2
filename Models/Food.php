<?php
require_once __DIR__ . "/Product.php";

class Food extends Product
{
    public $ingredient;
    public $size;

    function __construct($name, $price, $img, $category, $ingredient, $size)
    {
        parent::__construct($name, $price, $img, $category);
        $this->ingredient = $ingredient;
        $this->animal_size = $size;
    }
}
