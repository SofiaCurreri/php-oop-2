<?php 

require_once __DIR__ . "/../models/Prodotto.php";
require_once __DIR__ . "/../models/Categoria.php";
require_once __DIR__ . "/../models/ProdottoCuccia.php";
require_once __DIR__ . "/../models/ProdottoCibo.php";
require_once __DIR__ . "/../models/ProdottoGioco.php";

$prodotti = [
    new ProdottoCuccia("Cuccia Bellissima", 49.99, new Categoria("Cane", "fa-solid fa-dog"), "KG", 5, "Cotone"),
    new ProdottoCuccia("Cuccia Morbida", 23.99, new Categoria("Gatto", "fa-solid fa-cat"), "KG", 2, "Cotone"),
    
    new ProdottoCibo("Croccantini SuperDog", 13.50, new Categoria("Cane", "fa-solid fa-dog"), "KG", 8, "Secco"),
    new ProdottoCibo("Scatolette TunaGold", 7.50, new Categoria("Gatto", "fa-solid fa-cat"), "G", 500, "Umido"),
    
    new ProdottoGioco("Gommosso", 3.50, new Categoria("Cane", "fa-solid fa-dog"), "Plastica"),
    new ProdottoGioco("Sonaglio", 1.20, new Categoria("Gatto", "fa-solid fa-cat"), "Plastica"),
];


?>