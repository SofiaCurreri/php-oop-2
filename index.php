<?php 

class Prodotti{
    public $prezzo;
    public $cani;
    public $gatti;

    public function __construct(
        float $_prezzo,
        bool $_cani,
        bool $_gatti,
    ) {
        $this->prezzo = $_prezzo;
        $this->cani = $_cani;
        $this->gatti = $_gatti;
    }
}

class Cibo extends Prodotti{
    public $tipologia;

    public function __construct(
        float $_prezzo,
        bool $_cani,
        bool $_gatti,
        string $_tipologia,
    ){
      parent::__construct($_prezzo, $_cani, $_gatti);  
      $this->tipologia = $_tipologia;
    }
}

?>