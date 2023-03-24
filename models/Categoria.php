<?php 

class Categoria {
    public $nome;
    private static $categorie_accettate = [
        "Cane",
        "Gatto"
    ];

    public function __construct($_nome) {
        $this->setNome($_nome);
    }

    public function setNome($nome) {
        if(!is_string($nome) || $nome === "") return false;
        $this->nome = $nome;

        return $this;
    }

    public function getNome($nome) {
        return $this->$nome;
    }
}

?>