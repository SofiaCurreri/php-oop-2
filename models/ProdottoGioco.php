<?php 

require_once __DIR__ . "/Prodotto.php";

class ProdottoGioco extends Prodotto {
    public $materiale;
    
    public function __construct(
        string $nome,
        float $prezzo,
        Categoria $categoria,
        string $materiale
    )
    {
        parent::__construct($nome, $prezzo, $categoria);
        $this->materiale = $materiale;
    }
}
?>