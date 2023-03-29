<?php 

trait Pesabile {
    public $peso_unita_di_misura;
    public $peso;

    public function getPesoCompleto() {
        return "$this->peso_unita_di_misura $this->peso";
    }
}
 
?>