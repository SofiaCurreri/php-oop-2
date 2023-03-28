<?php 

require_once __DIR__ . "/../models/Prodotto.php";
require_once __DIR__ . "/../models/Categoria.php";
require_once __DIR__ . "/../models/ProdottoCuccia.php";
require_once __DIR__ . "/../models/ProdottoCibo.php";
require_once __DIR__ . "/../models/ProdottoGioco.php";

$categoria_cane = new Categoria("Cane", "fa-solid fa-dog" );
$categoria_gatto = new Categoria("Gatto", "fa-solid fa-cat" );

$prodotti = [
    new ProdottoCuccia("Cuccia Bellissima", 49.99, $categoria_cane, "KG", 5, "Cotone"),
    new ProdottoCuccia("Cuccia Morbida", 23.99, $categoria_gatto, "KG", 2, "Cotone"),
    
    new ProdottoCibo("Croccantini SuperDog", 13.50, $categoria_cane, "KG", 8, "Secco"),
    new ProdottoCibo("Scatolette TunaGold", 7.50, $categoria_gatto, "G", 500, "Umido"),
    
    new ProdottoGioco("Gommosso", 3.50, $categoria_cane, "Plastica"),
    new ProdottoGioco("Sonaglio", 1.20, $categoria_gatto, "Plastica"),
];

$prodotti_gatto = array_filter($prodotti, fn($prodotto) => $prodotto->getCategoria()->getNome() == "Gatto");
$prodotti_cane = array_filter($prodotti, fn($prodotto) => $prodotto->getCategoria()->getNome() == "Cane");



?>