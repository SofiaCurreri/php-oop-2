<?php 

include __DIR__ . "/Data/prodotti.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Extends</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CDN Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <h1 class="my-5">Prodotti per cani</h1>

        <div class="row row-cols-4 g-5">
            <?php foreach($prodotti_cane as $prodotto) : ?>
            <div class="col">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="<?= $prodotto->getCategoria()->icona ?>"></i>
                            <?= $prodotto->getNome() ?>
                            -
                            <small class="text-muted">
                                <?= $prodotto->getNomeClasse() ?>
                            </small>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <?php if($prodotto instanceof ProdottoCuccia || $prodotto instanceof ProdottoCibo) : ?>
                            <?= $prodotto->getPesoCompleto() ?>
                            <?php endif; ?>

                            <?php if($prodotto instanceof ProdottoCuccia || $prodotto instanceof ProdottoGioco) : ?>
                            <?= $prodotto->materiale ?>
                            <?php endif; ?>

                            <?php if($prodotto instanceof ProdottoCibo) : ?>
                            <?= $prodotto->tipologia ?>
                            <?php endif; ?>
                        </h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p>€ <?= number_format($prodotto->getPrezzo(), 2) ?></p>
                        <a href="#" class="card-link">Aggiungi al carrello</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <h1 class="my-5">Prodotti per gatti</h1>

        <div class="row row-cols-4 g-5">
            <?php foreach($prodotti_gatto as $prodotto) : ?>
            <div class="col">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="<?= $prodotto->getCategoria()->icona ?>"></i>
                            <?= $prodotto->getNome() ?>
                            -
                            <small class="text-muted"><?= $prodotto->getNomeClasse() ?></small>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <?php if($prodotto instanceof ProdottoCuccia || $prodotto instanceof ProdottoCibo) : ?>
                            <?= $prodotto->getPesoCompleto()?>
                            <?php endif; ?>

                            <?php if($prodotto instanceof ProdottoCuccia || $prodotto instanceof ProdottoGioco) : ?>
                            <?= $prodotto->materiale ?>
                            <?php endif; ?>

                            <?php if($prodotto instanceof ProdottoCibo) : ?>
                            <?= $prodotto->tipologia ?>
                            <?php endif; ?>
                        </h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p>€ <?= number_format($prodotto->getPrezzo(), 2) ?></p>
                        <a href="#" class="card-link">Aggiungi al carrello</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>