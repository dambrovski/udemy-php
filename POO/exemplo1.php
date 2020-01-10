<?php

class Pessoa {


public $nome;

public function falar(){

    return "o meu nome é " . $this->nome;
}


}

$airton = new Pessoa();
$airton->nome= "Airtom Dambrovski";
echo $airton->falar();

?>