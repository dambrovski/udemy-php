<?php

function ola($texto = "mundo", $periodo = "Bom dia"){
    return "Olá $texto! $periodo <br>";
}

echo ola("mundão", "Boa noite");
echo ola("world");
echo ola("dambrovski");

?>