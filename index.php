<?php 

class Cibo extends Prodotto{
    public $tipologia;

    public function __construct(
        string $_nome,
        float $_prezzo,
        string $_tipologia,
    ){
      parent::__construct($_nome, $_prezzo);  
      $this->tipologia = $_tipologia;
    }
}

class Giochi extends Prodotto{
    public $descrizione;

    public function __construct(
        string $_nome,
        float $_prezzo,
        string $_descrizione,
    ){
      parent::__construct($_nome, $_prezzo);  
      $this->descrizione = $_descrizione;
    }
}

class Cucce extends Prodotto{
    public $grandezza;

    public function __construct(
        string $_nome,
        float $_prezzo,
        string $_grandezza,
    ){
      parent::__construct($_nome, $_prezzo);  
      $this->grandezza = $_grandezza;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Extends</title>
</head>

<body>

    <h1>Prodotti</h1>

</body>

</html>