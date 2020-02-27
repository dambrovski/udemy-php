<?php

$id = (isset($_GET["id"]))?$_GET["id"]:2;

if (!is_numeric($id) || strlen($id > 5)){
    exit("sai fora hacker");
}

$conn = mysqli_connect("localhost", "root", "root", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
//    echo $resultado->deslogin . "<br />";
    print_r($resultado);
}
//http://localhost:8000/htdocs/udemy-php/seguranca/exemplo2.php?id=4 OR 1 = 1 --
?>
