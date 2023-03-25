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

    public function setPrezzo($prezzo) {
        if(!is_float($prezzo)) return false; //bloccata esecuzione se soddisfa almeno una delle condizioni
        $this->prezzo = $prezzo;

        return $this; //ritorna tutto l' oggetto
    }

    public function getPrezzo($prezzo) {
        return $this->$prezzo;
    }

    public function setCategoria($categoria) {
        if(!$categoria instanceof Categoria) return false; //se $categoria non è un' istanza di Categoria, blocco l' esecuzione
        $this->categoria = $categoria;

        return $this; //ritorna tutto l' oggetto
    }

    public function getCategoria($categoria) {
        return $this->$categoria;
    }
}

$prodotto = new Prodotto("Palla", 3.50, new Categoria("99246656"));
var_dump($prodotto);

?>