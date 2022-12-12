<?php

require_once __DIR__ . "/Product.php";

class Game extends Product
{
    public $color;
    public $type;

    function __construct($name, $price, $img,  $category, $color, $type)
    {
        parent::__construct($name, $price, $img, $category);
        $this->color = $color;
        $this->type = $type;
    }
}
