<?php

$anoNascimento = 1990;
//Na linha abaixo blablabla
$nomeCompleto = "Airton Silva";

echo $nomeCompleto;

echo "<br />";

unset($nomeCompleto, $anoNascimento);

if (isset($nomeCompleto)){
    echo $nomeCompleto;
}
else{
    echo "Nome foi excluido!";
}
echo "<br />";
$nome1 = "Airton";
$nome2 = "Dambrovski";

$nome3 = $nome1 . " " . $nome2;
echo $nome3;

?>