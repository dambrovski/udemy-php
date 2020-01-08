<?php
$nome = $_GET["a"];
$nome2 = $_GET["b"];
$ip = $_SERVER["REMOTE_ADDR"];
$script = $_SERVER["SCRIPT_NAME"];

echo $script;
echo $ip;
var_dump($nome);
var_dump($nome2);

?>