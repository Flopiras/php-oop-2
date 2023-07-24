<?php

include_once __DIR__ . '/data/items.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <header>
            <h1 class="text-center text-info my-4">Boolshop</h1>
        </header>
        <main>
            <h3>I nostri prodotti</h3>
            <!-- grid -->
            <div class="container-fluid">
                <div class="row">
                    <?php foreach ($items as $item) : ?>
                        <div class="col">
                            <!-- card -->
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $item->getImage() ?>" class="card-img-top" alt="<?= $item->getTitle() ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $item->getTitle() ?></h5>
                                    <p class="card-text"><strong>Category : </strong><?= $item->getCategory() ?></p>
                                    <p class="card-text"><strong>Price : </strong><?= $item->getPrice() ?></p>
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach  ?>
                </div>
            </div>
        </main>
    </div>
</body>

</html>