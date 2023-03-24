<?php 

require_once __DIR__ . "/Categoria.php";

class Prodotto{
    protected $nome;
    protected $prezzo;
    protected $categoria;

    public function __construct(
        string $_nome,
        float $_prezzo,
        Categoria $_categoria,
    ) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }

    public function setNome($nome) {
        if(!is_string($nome) || $nome === "") return false;
        $this->nome = $nome;

        return $this;
    }
}

?>