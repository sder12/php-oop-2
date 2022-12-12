<?php
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Game.php";
require_once __DIR__ . "/Models/Sleep.php";

//PRODUCT DEFAULT
$prod = new Product("gioco", 23, new Category("Cani"));
var_dump($prod);


//PRODUCT
$food = new Food("crocchette", 12, new Category("Gatti"), "pollo", "kitten");
var_dump($food);

$game = new Game("palla", 5, new Category("Cani"), "rossa", "antistress");
var_dump($game);

$bed = new Sleep("cuccia", 24, new Category("Cani"), "large", "cotton");
var_dump($bed);
