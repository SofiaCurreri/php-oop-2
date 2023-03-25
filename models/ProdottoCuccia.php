<?php 

require_once __DIR__ . "/Prodotto.php";

class ProdottoCuccia extends Prodotto {
    public function __construct(
        string $nome,
        float $prezzo,
        Categoria $categoria
    )
    {
        parent::__construct($nome, $prezzo, $categoria);
    }
}
?>