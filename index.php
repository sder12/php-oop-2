<?php
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Game.php";
require_once __DIR__ . "/Models/Sleep.php";

//PRODUCT DEFAULT
$prod = new Product("gioco", 23, new Category("Cani"));
// var_dump($prod);


//PRODUCT
$catfood = new Food("crocchette", 12, new Category("Gatti"), "pollo", "kitten");
// var_dump($food);

$ball = new Game("palla", 5, new Category("Cani"), "rossa", "antistress");
// var_dump($game);

$dogbed = new Sleep("cuccia", 24, new Category("Cani"), "large", "cotton");
// var_dump($bed);

$products = [
    $catfood, $ball, $dogbed
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header class="bg-dark text-white text-center">
        <div class="container">
            Little friends
        </div>
    </header>

    <main>
        <!-- Title -->
        <section class="text-center my-3">
            <h1>Pet Shop</h1>
            <h4>Choose the best products for your little friend</h4>
        </section>

        <!-- Prod Cards -->
        <section class="container">
            <div class="row row-cols-3">
                <?php foreach ($products as $prod) { ?>
                    <div class="col">
                        <div class="card">
                            <!-- <img src="<?php echo $movie->poster; ?>" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h6 class="text-uppercase"><?php echo $prod->name; ?></h6>
                                <p class="card-text">
                                    <?php echo $prod->category->category ?>
                                </p>

                                <p class="card-text">
                                    Price: <?php echo $prod->price ?> €
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>


    </main>
</body>

</html>