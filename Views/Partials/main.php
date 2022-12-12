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