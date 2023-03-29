<?php 

require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/traits/Pesabile.php";

class ProdottoCibo extends Prodotto {
    use Pesabile;

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