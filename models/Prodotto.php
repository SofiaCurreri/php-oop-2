<?php 

require_once __DIR__ . "/Categoria.php";

class Prodotto{
    protected $nome;
    protected $prezzo;
    protected $categoria;

    public function __construct(
        string $_nome,
        float $_prezzo,
        Categoria $_categoria, //$categoria è un' istanza della classe Categoria
    ) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }

    public function setNome($nome) {
        if(!is_string($nome) || $nome === "") return false; //bloccata esecuzione se soddisfa almeno una delle condizioni
        $this->nome = $nome;

        return $this; //ritorna tutto l' oggetto
    }

    public function getNome($nome) {
        return $this->$nome;
    }
}

$prodotto = new Prodotto("Palla", 3.50, new Categoria("99246656"));
var_dump($prodotto);

?>