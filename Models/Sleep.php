<?php


require_once __DIR__ . "/Product.php";

class Sleep extends Product
{
    public $size;
    public $material;

    function __construct($name, $price, $img, $category, $size, $material)
    {
        parent::__construct($name, $price, $img, $category);
        $this->size = $size;
        $this->material = $material;
    }
}
