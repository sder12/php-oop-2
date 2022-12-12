<?php
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Game.php";
require_once __DIR__ . "/Models/Sleep.php";

//PRODUCT DEFAULT
$prod = new Product("gioco", 23,  "https://www.foodpet.it/wp-content/uploads/2018/03/secco.jpg", new Category("Cani"));
// var_dump($prod);


//PRODUCT
$catfood = new Food("crocchette", 12, "https://www.foodpet.it/wp-content/uploads/2018/03/secco.jpg", new Category("Gatti"), "pollo", "kitten");
$dogfood = new Food("crocchette", 22, "https://www.foodpet.it/wp-content/uploads/2022/02/luscious_lamb_pork_2160x.jpg", new Category("Cani"), "tacchino", "adult");
$ball = new Game("palla", 5,  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzBPcWNoSKDd7x6iEXWQL9PA2ShbF1MlxZvw&usqp=CAU", new Category("Cani"), "rossa", "antistress");
$rope = new Game("corda", 13,  "https://www.villaggionatura.com/shop/8525-large_default/camon-cotonosso-treccia-per-cani-misura-28-cm.jpg", new Category("Cani"), "viola", "antistress");
$scratchtree = new Game("tiragraffi", 50,  "data:image/jpeg;base64,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", new Category("Gatti"), "marrone", "antistress");
$dogbed = new Sleep("cuccia", 24,  "https://i.ebayimg.com/images/g/VtQAAOSwWGJbdm2Y/s-l500.jpg", new Category("Cani"), "large", "cotton");
$catbed = new Sleep("cuccia", 24,  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQIiUdacQj0f5F21YQ1D8PWZtzxBHoriq91A&usqp=CAU", new Category("Gatti"), "large", "cotton");


$products = [
    $catfood, $ball, $dogbed, $scratchtree, $catbed, $dogfood, $rope,
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
            <div class="row row-cols-4">
                <?php foreach ($products as $prod) { ?>
                    <div class="col">
                        <div class="card my-2">

                            <!-- IMAGE -->
                            <img src="<?php echo $prod->img; ?>" class="card-img-top" alt="...">
                            <!-- TEXT -->
                            <div class="card-body text-center">
                                <!-- Name Product-->
                                <h5 class="text-capitalize"><?php echo $prod->name; ?></h5>
                                <!-- Price -->
                                <p class="card-text bg-secondary text-white py-3">
                                    Price: <?php echo $prod->price ?> €
                                </p>
                            </div>

                            <!-- ICON Category-->
                            <div class="bg-light text-center">
                                <?php if ($prod->category->category ==  "Cani") { ?>
                                    <img src="Images/dog.png" class="card-img-top w-25 my-2  " alt="">
                                <?php } else { ?>
                                    <img src="Images/cat.png" class="card-img-top w-25 my-2  " alt="">
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>

    <footer>
        <div class="container py-5">
            Made with &hearts;
        </div>
    </footer>
</body>

</html>