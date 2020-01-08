<?php

$meses = array("janeiro", "fevereiro", 
"março", "abril","maio",
"junho","julho","agosto", "Setembro",
"outubro","novembro","dezembro",);

foreach ($meses as $index => $mes) {
    echo "Indice: ".$index."<br / >";
    echo "O mês é: " . strtoupper($mes) . "<br /> <br />";
}

?>