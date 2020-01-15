<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Airton Dambrovski");
$cad->setEmail("tooonjr@gmail.com");
$cad->setSenha("root");

//echo $cad;

$cad->registrarVenda();

?>