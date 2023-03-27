<?php 

class Categoria {
    protected $nome;
    public $icona;
    private static $categorie_accettate = [
        "Cane",
        "Gatto"
    ];

    public function __construct($nome, $icona) {
        $this->icona = $icona;
        try{
            if(!$this->setNome($nome)) throw new Exception("Invalid argument 'nome' for 'Categoria' class. It must be a string and within the categorie_accettate array");
        } catch (Exception $e) {
            $error_message = $e->getMessage();
            include __DIR__ . "/../error_page.php";
            exit;
        }        
    }

    public function setNome($nome) {
        if(!is_string($nome) || $nome === "" || !in_array($nome, self::$categorie_accettate)) return false;
        $this->nome = $nome;

        return $this;
    }

    public function getNome($nome) {
        return $this->$nome;
    }
}

?>