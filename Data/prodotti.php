<?php 

require_once __DIR__ . "/../models/Prodotto.php";
require_once __DIR__ . "/../models/Categoria.php";

$prodotti = [
    new Prodotto("Palla", 3.50, new Categoria("Cane")),
    new Prodotto("Palla", 3.50, new Categoria("Gatto")),
    new Prodotto("Palla", 3.50, new Categoria("Cane")),
    new Prodotto("Palla", 3.50, new Categoria("Gatto")),
    new Prodotto("Palla", 3.50, new Categoria("Cane")),
    new Prodotto("Palla", 3.50, new Categoria("Gatto")),
];

?>