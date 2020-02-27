<?php

$permissao = 0775;
$pasta = "arquivs";

if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "diretório criado com sucesso";
?>
