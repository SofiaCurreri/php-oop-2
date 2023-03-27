<?php 

require_once __DIR__ . "/Categoria.php";

class Prodotto{
    protected $nome;
    protected $prezzo;
    protected $categoria;

    public function __construct(
        string $nome,
        float $prezzo,
        Categoria $categoria, //$categoria è un' istanza della classe Categoria
    ) 
    {
        try {
            if(!$this->setNome($nome)) throw new Exception("Argomento non valido per l' attributo 'nome' nella classe Prodotto");
            if(!$this->setPrezzo($prezzo)) throw new Exception("Argomento non valido per l' attributo 'prezzo' nella classe Prodotto");
            if(!$this->setCategoria($categoria)) throw new Exception("Argomento non valido per l' attributo 'categoria' nella classe Prodotto");
        } catch (Exception $e) {
            $error_message = $e->getMessage();
            include __DIR__ . "/../error_page.php";
            exit;
        }
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

?>