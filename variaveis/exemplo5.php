<?php

$nome = "Airton";

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){
    global $nome;
    echo $nome . "teste 2";
}


teste();
echo "<br />";
teste2();


?>