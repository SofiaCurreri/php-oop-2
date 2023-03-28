<?php 

require_once __DIR__ . "/Prodotto.php";

class ProdottoCibo extends Prodotto {
    public $peso_unita_di_misura;
    public $peso;
    public $tipologia;
    
    public function __construct(
        string $nome,
        float $prezzo,
        Categoria $categoria,
        string $peso_unita_di_misura,
        int $peso,
        string $tipologia
    )
    {
        parent::__construct($nome, $prezzo, $categoria);
        $this->peso_unita_di_misura = $peso_unita_di_misura;
        $this->peso = $peso;
        $this->tipologia = $tipologia;
    }

    public function getNomeClasse() {
        return "Cibo";
    }
}
?>