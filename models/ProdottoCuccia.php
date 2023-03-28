<?php 

require_once __DIR__ . "/Prodotto.php";

class ProdottoCuccia extends Prodotto {
    public $peso_unita_di_misura;
    public $peso;
    public $materiale;

    public function __construct(
        string $nome,
        float $prezzo,
        Categoria $categoria,
        string $peso_unita_di_misura,
        int $peso,
        string $materiale
    )
    {
        parent::__construct($nome, $prezzo, $categoria);
        $this->peso_unita_di_misura = $peso_unita_di_misura;
        $this->peso = $peso;
        $this->materiale = $materiale;
    }

    public function getNomeClasse() {
        return "Cuccia";
    }
}
?>