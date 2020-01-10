<?php

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;
    
    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;


    }

    public function __destruct()
    {
        var_dump("DESTRUIDO");
    }

    public function __toString()
    {
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }
}

$meuEndereco = new Endereco("Rua são bento", "280", "Almirante Tamandaré");

var_dump($meuEndereco);
echo "<br>";
echo $meuEndereco;

unset($meuEndereco);

?>