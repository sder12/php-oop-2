<?php
require_once __DIR__ . "/Product.php";

class Food extends Product
{
    public $ingredient;
    public $animal_size;

    function __construct($name, $price, $category, $ingredient, $animal_size)
    {
        parent::__construct($name, $price, $category);
        $this->ingredient = $ingredient;
        $this->animal_size = $animal_size;
    }
}
